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
use ITZielArt\TorahVerse\Api\Data\QuoteInterface;
use ITZielArt\TorahVerse\Api\Data\QuoteInterfaceFactory;
use ITZielArt\TorahVerse\Api\Data\QuoteSearchResultsInterface;
use ITZielArt\TorahVerse\Api\Data\QuoteSearchResultsInterfaceFactory;
use ITZielArt\TorahVerse\Api\QuoteRepositoryInterface;
use ITZielArt\TorahVerse\Model\ResourceModel\Quote as ResourceQuote;
use ITZielArt\TorahVerse\Model\ResourceModel\Quote\CollectionFactory as QuoteCollectionFactory;

class QuoteRepository implements QuoteRepositoryInterface
{
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var ResourceQuote
     */
    private $resource;

    /**
     * @var QuoteInterfaceFactory
     */
    private $dataQuoteFactory;

    /**
     * @var ExtensibleDataObjectConverter
     */
    private $extensibleDataObjectConverter;

    /**
     * @var QuoteSearchResultsInterfaceFactory
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
     * @var QuoteFactory
     */
    private $quoteFactory;

    /**
     * @var QuoteCollectionFactory
     */
    private $quoteCollectionFactory;

    /**
     * @var JoinProcessorInterface
     */
    private $extensionAttributesJoinProcessor;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    public function __construct(
        ResourceQuote $resource,
        QuoteFactory $quoteFactory,
        QuoteInterfaceFactory $dataQuoteFactory,
        QuoteCollectionFactory $quoteCollectionFactory,
        QuoteSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->quoteFactory = $quoteFactory;
        $this->dataQuoteFactory = $dataQuoteFactory;
        $this->quoteCollectionFactory = $quoteCollectionFactory;
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
        QuoteInterface $quote
    ) {
        $quoteData = $this->extensibleDataObjectConverter->toNestedArray(
            $quote,
            [],
            QuoteInterface::class
        );

        $quoteModel = $this->quoteFactory->create()->setData($quoteData);

        try {
            $this->resource->save($quoteModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the Quote: %1',
                $exception->getMessage()
            ));
        }
        return $quoteModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($quoteId)
    {
        $quote = $this->quoteFactory->create();
        $this->resource->load($quote, $quoteId);
        if (!$quote->getId()) {
            throw new NoSuchEntityException(__('Quote with id "%1" does not exist.', $quoteId));
        }
        return $quote->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        SearchCriteriaInterface $criteria
    ) {
        $collection = $this->quoteCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            QuoteInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        /** @var QuoteSearchResultsInterface $searchResults */
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
        QuoteInterface $quote
    ) {
        try {
            $quoteModel = $this->quoteFactory->create();
            $this->resource->load($quoteModel, $quote->getQuoteId());
            $this->resource->delete($quoteModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Quote: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($quoteId)
    {
        return $this->delete($this->get($quoteId));
    }
}
