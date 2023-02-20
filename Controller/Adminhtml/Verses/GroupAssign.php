<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Verses;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Api\GroupRepositoryInterface;
use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;
use Psr\Log\LoggerInterface;
use ITZielArt\TorahVerse\Model\Verse;
use ITZielArt\TorahVerse\Model\ResourceModel\Verse\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;

class GroupAssign extends Action
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;

    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;
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
        SearchCriteriaBuilder $searchCriteriaBuilder,
        GroupRepositoryInterface $groupRepository,
        VerseRepositoryInterface $verseRepository,
        CollectionFactory $collectionFactory,
        LoggerInterface $logger,
        Context $context
    ) {
        $this->filter = $filter;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->groupRepository = $groupRepository;
        $this->verseRepository = $verseRepository;
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
            $searchCriteria = $this->searchCriteriaBuilder
                ->addFilter(GroupInterface::CODE, $groupCode)
                ->create();
            $groupsList = $this->groupRepository->getList($searchCriteria);
            $groupsItems = $groupsList->getItems();
            $groupItem = reset($groupsItems);
            $groupId = $groupItem->getGroupId();
            $updated = 0;
            /** @var Verse $item */
            foreach ($collection as $item) {
                $verseId = $item['verse_id'];
                $model = $this->verseRepository->get($verseId);
                $model->setGroupId($groupId);
                $this->verseRepository->save($model);
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
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::verses');
    }
}
