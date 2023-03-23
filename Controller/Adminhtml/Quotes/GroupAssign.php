<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Quotes;

use ITZielArt\TorahVerse\Api\QuoteRepositoryInterface;
use ITZielArt\TorahVerse\Model\GroupManagement;
use ITZielArt\TorahVerse\Model\ResourceModel\Quote\CollectionFactory;
use ITZielArt\TorahVerse\Model\Quote;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;
use Psr\Log\LoggerInterface;

class GroupAssign extends Action
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var GroupManagement
     */
    private $groupManagement;

    /**
     * @var QuoteRepositoryInterface
     */
    private $quoteRepository;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @inheritDoc
     */
    public function __construct(
        Filter $filter,
        GroupManagement $groupManagement,
        QuoteRepositoryInterface $quoteRepository,
        CollectionFactory $collectionFactory,
        LoggerInterface $logger,
        Context $context
    ) {
        $this->filter = $filter;
        $this->groupManagement = $groupManagement;
        $this->quoteRepository = $quoteRepository;
        $this->collectionFactory = $collectionFactory;
        $this->logger = $logger;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        try {
            $collection = $this->filter->getCollection($this->collectionFactory->create());
            $groupCode = $this->getRequest()->getParam('group', 'default');
            $group = $this->groupManagement->getGroupByCode($groupCode);
            $groupId = (int)$group->getGroupId();
            $updated = 0;
            /** @var Quote $item */
            foreach ($collection as $item) {
                $quoteId = (int)$item['quote_id'];
                $model = $this->quoteRepository->get($quoteId);
                $model->setGroupId($groupId);
                $this->quoteRepository->save($model);
                $updated++;
            }
            if ($updated) {
                $this->messageManager->addSuccess(__('A total of %1 record(s) were updated.', $updated));
            }

        } catch (\Exception $e) {
            $this->logger->info($e->getMessage());
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::quotes');
    }
}
