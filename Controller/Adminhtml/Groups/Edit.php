<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Groups;

use ITZielArt\TorahVerse\Controller\Adminhtml\Grid;
use ITZielArt\TorahVerse\Model\Data\Group as GroupData;
use ITZielArt\TorahVerse\Model\GroupFactory;
use ITZielArt\TorahVerse\Model\GroupManagement;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;

class Edit extends Grid implements HttpGetActionInterface
{
    /**
     * @var GroupFactory
     */
    private $groupFactory;
    /**
     * @var GroupManagement
     */
    private $groupManagement;

    /**
     * @inheritDoc
     */
    public function __construct(
        GroupFactory $groupFactory,
        GroupManagement $groupManagement,
        DataPersistorInterface $dataPersistor,
        Context $context
    ) {
        $this->groupFactory = $groupFactory;
        $this->groupManagement = $groupManagement;
        parent::__construct($dataPersistor, $context);
    }

    /**
     * {@inheritDoc}
     * @throws LocalizedException
     */
    public function execute()
    {
        $groupId = (int)$this->getRequest()->getParam('group_id');
        $model = $this->groupFactory->create();
        if (!empty($groupId)) {
            /** @var GroupData $modelData */
            $modelData = $this->groupManagement->get($groupId);
            $model->setData($modelData->__toArray());
            if (empty($modelData->getGroupId())) {
                $this->messageManager->addErrorMessage(__('This group no longer exists.'));
                /** @var Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->dataPersistor->set('itzielart_groups', $model);
        return parent::execute();
    }

    /**
     * @inheritDoc
     */
    protected function getTitle(): string
    {
        return (string)__('Edit Group');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::groups');
    }
}
