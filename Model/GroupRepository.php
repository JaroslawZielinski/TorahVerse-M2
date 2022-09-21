<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;
use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;
use JaroslawZielinski\TorahVerse\Api\Data\GroupInterfaceFactory;
use JaroslawZielinski\TorahVerse\Api\Data\GroupSearchResultsInterface;
use JaroslawZielinski\TorahVerse\Api\Data\GroupSearchResultsInterfaceFactory;
use JaroslawZielinski\TorahVerse\Api\GroupRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Group as ResourceGroup;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Group\CollectionFactory as GroupCollectionFactory;

class GroupRepository implements GroupRepositoryInterface
{
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var ResourceGroup
     */
    private $resource;

    /**
     * @var GroupInterfaceFactory
     */
    private $dataGroupFactory;

    /**
     * @var ExtensibleDataObjectConverter
     */
    private $extensibleDataObjectConverter;

    /**
     * @var GroupSearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    /**
     * @var DataObjectProcessor
     */
    private $dataObjectProcessor;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var GroupFactory
     */
    private $groupFactory;

    /**
     * @var GroupCollectionFactory
     */
    private $groupCollectionFactory;

    /**
     * @var JoinProcessorInterface
     */
    private $extensionAttributesJoinProcessor;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    public function __construct(
        ResourceGroup $resource,
        GroupFactory $groupFactory,
        GroupInterfaceFactory $dataGroupFactory,
        GroupCollectionFactory $groupCollectionFactory,
        GroupSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->groupFactory = $groupFactory;
        $this->dataGroupFactory = $dataGroupFactory;
        $this->groupCollectionFactory = $groupCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        GroupInterface $group
    ) {
        $groupData = $this->extensibleDataObjectConverter->toNestedArray(
            $group,
            [],
            GroupInterface::class
        );

        $groupModel = $this->groupFactory->create()->setData($groupData);

        try {
            $this->resource->save($groupModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the Group: %1',
                $exception->getMessage()
            ));
        }
        return $groupModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($groupId)
    {
        $group = $this->groupFactory->create();
        $this->resource->load($group, $groupId);
        if (!$group->getId()) {
            throw new NoSuchEntityException(__('Group with id "%1" does not exist.', $groupId));
        }
        return $group->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        SearchCriteriaInterface $criteria
    ) {
        $collection = $this->groupCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            GroupInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        /** @var GroupSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);

        $items = [];
        foreach ($collection as $model) {
            $items[] = $model->getDataModel();
        }

        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        GroupInterface $group
    ) {
        try {
            $groupModel = $this->groupFactory->create();
            $this->resource->load($groupModel, $group->getGroupId());
            $this->resource->delete($groupModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Group: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($groupId)
    {
        return $this->delete($this->get($groupId));
    }
}
