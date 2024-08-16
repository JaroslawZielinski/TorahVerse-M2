<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\Verses;

use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;
use JaroslawZielinski\TorahVerse\Api\VerseRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\VerseFactory;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;

class Save extends Action
{
    /**
     * @var Torah
     */
    private $torah;

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
        TorahFactory $torahFactory,
        LoggerInterface $logger,
        Config $config,
        VerseFactory $verseFactory,
        VerseRepositoryInterface $verseRepository,
        Context $context
    ) {
        $this->torah = $torahFactory->create();
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
        $siglumParameter = $verse->getSiglum();
        if (empty(trim($siglumParameter))) {
            throw new \Exception('String is empty!');
        }
        $siglum =  SiglumFactory::createFromString($siglumParameter);
        $language = $this->config->getInternalizationLanguage();
        $text = $this->torah->getTextBySiglum($siglum, $language);
        if (!empty($text)) {
            $verse->setContent($text->getOrdered());
            $verse->setUnordered($text->getUnOrdered());
            $verse->setDescription($text->getDescription());
        } else {
            $previewText = implode(<<<EOT

EOT, $this->torah->getErrors());
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
