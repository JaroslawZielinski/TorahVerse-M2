<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Groups;

use ITZielArt\TorahVerse\Model\Data\Group;
use ITZielArt\TorahVerse\Model\GroupManagement;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class Delete extends Action
{
    /**
     * @var GroupManagement
     */
    private $groupManagement;

    /**
     * @inheritDoc
     */
    public function __construct(
        GroupManagement $groupManagement,
        Context $context
    ) {
        $this->groupManagement = $groupManagement;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $groupId = (int)$this->getRequest()->getParam('group_id');
        if (!empty($groupId)) {
            try {
                $this->groupManagement->deleteById($groupId);
            } catch (NoSuchEntityException $e) {
                $this->messageManager->addErrorMessage(__('This group no longer exists.'));
                /** @var Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                /** @var Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->messageManager->addSuccessMessage(__('The group succesfully deleted [ID: %1].', $groupId));
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::groups');
    }
}
