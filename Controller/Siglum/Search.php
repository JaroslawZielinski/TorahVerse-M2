<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Siglum;

use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\TorahVerse\Block\Search\Results;
use JaroslawZielinski\TorahVerse\Controller\Ajax;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Data\Form\FormKey;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;
use JaroslawZielinski\TorahVerse\Model\Cache\Progress as BibleRepository;
use Magento\Framework\View\Result\PageFactory;

class Search extends Ajax
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @var BibleRepository
     */
    private $bibleRepository;

    /**
     * @var JsonSerializer
     */
    private $serializer;

    /**
     * @var Torah
     */
    private $torah;

    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritDoc
     */
    public function __construct(
        PageFactory $pageFactory,
        BibleRepository $bibleRepository,
        JsonSerializer $serializer,
        TorahFactory $torahFactory,
        Config $config,
        FormKey $formKey,
        JsonFactory $resultJsonFactory,
        Context $context
    ) {
        $this->pageFactory = $pageFactory;
        $this->bibleRepository = $bibleRepository;
        $this->serializer = $serializer;
        $this->torah = $torahFactory->create();
        $this->config = $config;
        parent::__construct($formKey, $resultJsonFactory, $context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $request = $this->getRequest();
        try {
            // text
            $paramSearchVerse = $request->getParam('search-verse');
            if (empty($paramSearchVerse)) {
                throw new LocalizedException(__('Search Verse is not set!'));
            }
            // checkbox
            $paramSearchInResults = !!$request->getParam('search-in-results');
            // text
            $paramSearchInResultsSearch = $request->getParam('search-in-results-search');
            if ($paramSearchInResults && empty($paramSearchInResultsSearch)) {
                throw new LocalizedException(__('Search in results search is not set!'));
            }
            // array of checkboxes
            $paramSearchParts = array_keys($request->getParam('search-parts') ?? []);
            if (empty($paramSearchParts)) {
                throw new LocalizedException(__('Search parts can not be empty!'));
            }
            // checkbox
            $paramCaseSensitive = !!$request->getParam('case-sensitive');
            // select
            $paramVerseContext = $request->getParam('verse-context');
            if (empty($paramVerseContext) && 0 !== (int)$paramVerseContext) {
                throw new LocalizedException(__('Verse Context is not set!'));
            }
            // select
            $paramVerseTranslations = $request->getParam('verse-translations');
            if (empty($paramVerseTranslations)) {
                throw new LocalizedException(__('Verse translation is not set!'));
            }
            // text
            $curPage = $request->getParam('p');
            $curPage = empty($curPage) ? 1 : $curPage;
            // text
            $pageLimit = (int)($request->getParam('limiter') ?? $this->config->getTorahInputResultsPerPage());
            $collection = $this->bibleRepository->search(
                $paramSearchVerse,
                $paramVerseTranslations,
                $paramSearchInResultsSearch,
                $paramCaseSensitive ? BibleRepository::SEARCH_MODE_CASESENSITIVE
                    : BibleRepository::SEARCH_MODE_CASEINSENSITIVE,
                $paramSearchParts,
                (int)$paramVerseContext
            );
            $isServiceLinkEnable = $this->config->isModuleServiceLinkEnabled();
            /** @var Results $results */
            $results = $resultPage->getLayout()
                ->getBlock('verse.search.results')
                ->setSearch($paramSearchVerse)
                ->setSearch2($paramSearchInResults ? $paramSearchInResultsSearch : null)
                ->setPageSize($pageLimit)
                ->setCurPage($curPage)
                ->setCollection($collection)
                ->setIsServiceLinkEnable($isServiceLinkEnable);
            $resultHtml = $results->toHtml();
            $data['status'] = 'ok';
        } catch (\Exception $e) {
            $resultHtml = $e->getMessage();
            $data['status'] = 'error';
        }
        $data['result'] = $resultHtml;
        return $this->ajax($data);
    }
}
