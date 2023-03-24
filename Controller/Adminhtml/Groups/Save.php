<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Groups;

use ITZielArt\TorahVerse\Api\QuoteRepositoryInterface;
use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use ITZielArt\TorahVerse\Model\GroupFactory;
use ITZielArt\TorahVerse\Model\GroupManagement;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Psr\Log\LoggerInterface;

class Save extends Action
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var GroupFactory
     */
    private $groupFactory;
    /**
     * @var GroupManagement
     */
    private $groupManagement;
    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;
    /**
     * @var QuoteRepositoryInterface
     */
    private $quoteRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        LoggerInterface $logger,
        GroupFactory $groupFactory,
        GroupManagement $groupManagement,
        VerseRepositoryInterface $verseRepository,
        QuoteRepositoryInterface $quoteRepository,
        Context $context
    ) {
        $this->logger = $logger;
        $this->groupFactory = $groupFactory;
        $this->groupManagement = $groupManagement;
        $this->verseRepository = $verseRepository;
        $this->quoteRepository = $quoteRepository;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        $assignVerseIds = $data['verses_ids'] ?? [];
        $assignQuoteIds = $data['quotes_ids'] ?? [];
        $isNew = false;
        if (empty($data['group_id'])) {
            unset($data['group_id']);
            $isNew = true;
        }
        try {
            $model = $this->groupFactory->create();
            $model->setData($data);
            $modelData = $model->getDataModel();
            $modelData = $this->groupManagement->save($modelData);
            $this->messageManager->addSuccessMessage(__('You saved the group [ID: %1].', $modelData->getGroupId()));
            if (!empty($assignVerseIds)) {
                $count = 0;
                foreach ($assignVerseIds as $assignVerseId) {
                    $verseModelData = $this->verseRepository->get((int)$assignVerseId);
                    $verseModelData->setGroupId($modelData->getGroupId());
                    $this->verseRepository->save($verseModelData);
                    $count++;
                }
                $this->messageManager->addSuccess(__('A total of %1 verse(s) have been assign to it.', $count));
            }
            if (!empty($assignQuoteIds)) {
                $count = 0;
                foreach ($assignQuoteIds as $assignQuoteId) {
                    $quoteModelData = $this->quoteRepository->get((int)$assignQuoteId);
                    $quoteModelData->setGroupId($modelData->getGroupId());
                    $this->quoteRepository->save($quoteModelData);
                    $count++;
                }
                $this->messageManager->addSuccess(__('A total of %1 quote(s) have been assign to it.', $count));
            }
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());
            $this->messageManager->addErrorMessage(nl2br($e->getMessage()));
            return $resultRedirect->setPath('*/*/index');
        }
        if (!empty($this->getRequest()->getParam('back'))) {
            $groupId = (int)($isNew ? $modelData->getGroupId() : $this->getRequest()->getParam('group_id'));
            return $resultRedirect->setPath('*/*/edit', ['group_id' => $groupId, '_current' => true]);
        }
        return $resultRedirect->setPath('*/*/index');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::groups');
    }
}
