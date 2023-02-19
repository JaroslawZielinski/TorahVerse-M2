<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Verses;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Api\Data\VerseInterface;
use ITZielArt\TorahVerse\Api\GroupRepositoryInterface;
use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use ITZielArt\TorahVerse\Model\Verse;
use ITZielArt\TorahVerse\Model\VerseFactory;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;
use GuzzleHttp\Client;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Bible\TorahValidator;

class Save extends Action
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var VerseFactory|Context
     */
    private $verseFactory;
    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;
    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @inheritDoc
     */
    public function __construct(
        LoggerInterface $logger,
        VerseFactory  $verseFactory,
        VerseRepositoryInterface $verseRepository,
        GroupRepositoryInterface $groupRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        Context $context
    ) {
        $this->logger = $logger;
        $this->verseFactory = $verseFactory;
        $this->verseRepository = $verseRepository;
        $this->groupRepository = $groupRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        parent::__construct($context);
    }

    /**
     * @throws LocalizedException
     * @throws \Exception
     */
    private function postProcess(VerseInterface $verse): VerseInterface
    {
        //GroupID Part
        $groupCode = $verse->getGroupId();
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter(GroupInterface::CODE, $groupCode)
            ->create();
        $groupsList = $this->groupRepository->getList($searchCriteria);
        $groupsItems = $groupsList->getItems();
        $groupItem = reset($groupsItems);
        $verse->setGroupId($groupItem->getGroupId());
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
        $text = $torah->getTextBySiglum($siglum);
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
        if (empty($data['verse_id'])) {
            unset($data['verse_id']);
        }
        try {
            /** @var Verse $model */
            $model = $this->verseFactory->create();
            $model->setData($data);
            $modelData = $model->getDataModel();
            $modelData = $this->postProcess($modelData);
            $modelData = $this->verseRepository->save($modelData);
            $this->messageManager->addSuccessMessage(__('You saved the verse [ID: %1].', $modelData->getVerseId()));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(nl2br($e->getMessage()));
            return $resultRedirect->setPath('*/*/index');
        }
        if (!empty($this->getRequest()->getParam('back'))) {
            $verseId = (int)$this->getRequest()->getParam('verse_id');
            return $resultRedirect->setPath('*/*/edit', ['verse_id' => $verseId, '_current' => true]);
        }
        return $resultRedirect->setPath('*/*/index');
    }
}
