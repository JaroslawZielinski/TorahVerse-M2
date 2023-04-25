<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\Verses;

use GuzzleHttp\Client;
use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;
use JaroslawZielinski\TorahVerse\Api\VerseRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\Verse;
use JaroslawZielinski\TorahVerse\Model\VerseFactory;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;
use JaroslawZielinski\TorahVerse\Model\Config;

class Save extends Action
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var VerseFactory
     */
    private $verseFactory;

    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        LoggerInterface $logger,
        Config $config,
        VerseFactory $verseFactory,
        VerseRepositoryInterface $verseRepository,
        Context $context
    ) {
        $this->logger = $logger;
        $this->config = $config;
        $this->verseFactory = $verseFactory;
        $this->verseRepository = $verseRepository;
        parent::__construct($context);
    }

    /**
     * @throws LocalizedException
     * @throws \Exception
     */
    private function postProcess(VerseInterface $verse): VerseInterface
    {
        //Verse Content Part
        $client = new Service\Client($this->logger, new Client());
        $torah = new Torah(new TorahValidator(), new Service($client));
        $translationParameter = $verse->getTranslation();
        if (empty($translationParameter)) {
            throw new \Exception('Translation is not set!');
        }
        $siglumParameter = $verse->getSiglum();
        if (empty(trim($siglumParameter))) {
            throw new \Exception('String is empty!');
        }
        $siglum =  SiglumFactory::createFromTranslationAndString($translationParameter, $siglumParameter);
        $language = $this->config->getInternalizationLanguage();
        $text = $torah->getTextBySiglum($siglum, $language);
        if (!empty($text)) {
            $verse->setContent($text->getOrdered());
            $verse->setUnordered($text->getUnOrdered());
            $verse->setDescription($text->getDescription());
        } else {
            $previewText = implode(<<<EOT

EOT, $torah->getErrors());
            throw new \Exception($previewText);
        }
        return $verse;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        $isNew = false;
        if (empty($data['verse_id'])) {
            unset($data['verse_id']);
            $isNew = true;
        }
        try {
            $model = $this->verseFactory->create();
            $model->setData($data);
            $modelData = $model->getDataModel();
            $modelData = $this->postProcess($modelData);
            $modelData = $this->verseRepository->save($modelData);
            $this->messageManager->addSuccessMessage(__('You saved the verse [ID: %1].', $modelData->getVerseId()));
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());
            $this->messageManager->addErrorMessage(nl2br($e->getMessage()));
            return $resultRedirect->setPath('*/*/index');
        }
        if (!empty($this->getRequest()->getParam('back'))) {
            $verseId = (int)($isNew ? $modelData->getVerseId() : $this->getRequest()->getParam('verse_id'));
            return $resultRedirect->setPath('*/*/edit', ['verse_id' => $verseId, '_current' => true]);
        }
        return $resultRedirect->setPath('*/*/index');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('JaroslawZielinski_TorahVerse::verses');
    }
}
