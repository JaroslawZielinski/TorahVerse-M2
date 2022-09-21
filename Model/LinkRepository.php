<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

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
use ITZielArt\TorahVerse\Api\Data\LinkInterface;
use ITZielArt\TorahVerse\Api\Data\LinkInterfaceFactory;
use ITZielArt\TorahVerse\Api\Data\LinkSearchResultsInterface;
use ITZielArt\TorahVerse\Api\Data\LinkSearchResultsInterfaceFactory;
use ITZielArt\TorahVerse\Api\LinkRepositoryInterface;
use ITZielArt\TorahVerse\Model\ResourceModel\Link as ResourceLink;
use ITZielArt\TorahVerse\Model\ResourceModel\Link\CollectionFactory as LinkCollectionFactory;

class LinkRepository implements LinkRepositoryInterface
{
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var ResourceLink
     */
    private $resource;

    /**
     * @var LinkInterfaceFactory
     */
    private $dataLinkFactory;

    /**
     * @var ExtensibleDataObjectConverter
     */
    private $extensibleDataObjectConverter;

    /**
     * @var LinkSearchResultsInterfaceFactory
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
     * @var LinkFactory
     */
    private $linkFactory;

    /**
     * @var LinkCollectionFactory
     */
    private $linkCollectionFactory;

    /**
     * @var JoinProcessorInterface
     */
    private $extensionAttributesJoinProcessor;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    public function __construct(
        ResourceLink $resource,
        LinkFactory $linkFactory,
        LinkInterfaceFactory $dataLinkFactory,
        LinkCollectionFactory $linkCollectionFactory,
        LinkSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->linkFactory = $linkFactory;
        $this->dataLinkFactory = $dataLinkFactory;
        $this->linkCollectionFactory = $linkCollectionFactory;
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
        LinkInterface $link
    ) {
        $linkData = $this->extensibleDataObjectConverter->toNestedArray(
            $link,
            [],
            LinkInterface::class
        );

        $linkModel = $this->linkFactory->create()->setData($linkData);

        try {
            $this->resource->save($linkModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the Link: %1',
                $exception->getMessage()
            ));
        }
        return $linkModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($linkId)
    {
        $link = $this->linkFactory->create();
        $this->resource->load($link, $linkId);
        if (!$link->getId()) {
            throw new NoSuchEntityException(__('Link with id "%1" does not exist.', $linkId));
        }
        return $link->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        SearchCriteriaInterface $criteria
    ) {
        $collection = $this->linkCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            LinkInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        /** @var LinkSearchResultsInterface $searchResults */
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
        LinkInterface $link
    ) {
        try {
            $linkModel = $this->linkFactory->create();
            $this->resource->load($linkModel, $link->getLinkId());
            $this->resource->delete($linkModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Link: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($linkId)
    {
        return $this->delete($this->get($linkId));
    }
}
