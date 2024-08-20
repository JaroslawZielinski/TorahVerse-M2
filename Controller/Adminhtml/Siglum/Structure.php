<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\Siglum;

use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\TorahVerse\Controller\Adminhtml\Ajax;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use Magento\Backend\Block\Admin\Formkey;
use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;

class Structure extends Ajax
{
    /**
     * @var Torah
     */
    private $torah;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var JsonSerializer
     */
    private $serializer;

    /**
     * @inheritDoc
     */
    public function __construct(
        JsonSerializer $serializer,
        TorahFactory $torahFactory,
        Config $config,
        FormKey $formKey,
        JsonFactory $resultJsonFactory,
        Context $context
    ) {
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
        try {
            $request = $this->getRequest();
            $translationParameter = $request->getParam('translation');
            if (empty($translationParameter)) {
                throw new \Exception('Translation is not set!');
            }
            $bookParameter = $request->getParam('book');
            if (empty(trim($bookParameter))) {
                throw new \Exception('Book string is empty!');
            }
            $chapterParameter = $request->getParam('chapter');
            if ('0' !== $chapterParameter && empty(trim($chapterParameter))) {
                throw new \Exception('Chapter string is empty!');
            }
            $verseStartParameter = $request->getParam('verse', '-1');
            $isVerseStart = '-1' === $verseStartParameter;
            $verseStartParameter = $isVerseStart ? '1' : $verseStartParameter;
            if (empty(trim($verseStartParameter))) {
                throw new \Exception('Verse Start string is empty!');
            }
            $translation = $this->torah->getResourceByTranslationCode($translationParameter);
            $tanakh = $translation->getTanakh();
            $neviimKetuvim = $translation->getNeviimKetuvim();
            $britHadasha = $translation->getBritHadasha();
            $book = $tanakh[$bookParameter] ?? $neviimKetuvim[$bookParameter] ?? $britHadasha[$bookParameter];
            $verseMax = (int)$book[Resources::CHAPTERS][$chapterParameter];
            $siglum = SiglumFactory::create(
                $translationParameter,
                $bookParameter,
                $chapterParameter,
                sprintf('%s-%s', $verseStartParameter, $verseMax)
            );
            $sigla = $this->torah->getSingleSiglaBySiglum($siglum);
            $resultArray = [];
            /** @var Siglum $item */
            array_map(function ($item) use (&$resultArray) {
                $verseStart = $item->getVerseStart();
                $itemId = 'item_' . $verseStart;
                $resultArray[$itemId] = $verseStart;
            }, $sigla);
            if (!$isVerseStart) {
                $resultArray['item_.'] = '.';
                array_shift($resultArray);
            }
            $result = $this->serializer->serialize($resultArray);
            $data['status'] = 'ok';
        } catch (\Exception $e) {
            $result = $e->getMessage();
            $data['status'] = 'error';
        }
        $data['result'] = $result;
        return $this->ajax($data);
    }
}
