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
use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;
use JaroslawZielinski\TorahVerse\Api\Data\VerseInterfaceFactory;
use JaroslawZielinski\TorahVerse\Api\Data\VerseSearchResultsInterface;
use JaroslawZielinski\TorahVerse\Api\Data\VerseSearchResultsInterfaceFactory;
use JaroslawZielinski\TorahVerse\Api\VerseRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse as ResourceVerse;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;

class VerseRepository implements VerseRepositoryInterface
{
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var ResourceVerse
     */
    private $resource;

    /**
     * @var VerseInterfaceFactory
     */
    private $dataVerseFactory;

    /**
     * @var ExtensibleDataObjectConverter
     */
    private $extensibleDataObjectConverter;

    /**
     * @var VerseSearchResultsInterfaceFactory
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
     * @var VerseFactory
     */
    private $verseFactory;

    /**
     * @var VerseCollectionFactory
     */
    private $verseCollectionFactory;

    /**
     * @var JoinProcessorInterface
     */
    private $extensionAttributesJoinProcessor;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    public function __construct(
        ResourceVerse $resource,
        VerseFactory $verseFactory,
        VerseInterfaceFactory $dataVerseFactory,
        VerseCollectionFactory $verseCollectionFactory,
        VerseSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->verseFactory = $verseFactory;
        $this->dataVerseFactory = $dataVerseFactory;
        $this->verseCollectionFactory = $verseCollectionFactory;
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
        VerseInterface $verse
    ) {
        $verseData = $this->extensibleDataObjectConverter->toNestedArray(
            $verse,
            [],
            VerseInterface::class
        );

        $verseModel = $this->verseFactory->create()->setData($verseData);

        try {
            $this->resource->save($verseModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the Verse: %1',
                $exception->getMessage()
            ));
        }
        return $verseModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($verseId)
    {
        $verse = $this->verseFactory->create();
        $this->resource->load($verse, $verseId);
        if (!$verse->getId()) {
            throw new NoSuchEntityException(__('Verse with id "%1" does not exist.', $verseId));
        }
        return $verse->getDataModel();
    }

    /**
     * @inheritDoc
     */
    public function getByCode($verseCode)
    {
        $verse = $this->verseFactory->create();
        $this->resource->load($verse, $verseCode, VerseInterface::CODE);
        if (!$verse->getId()) {
            throw new NoSuchEntityException(__('Verse with code "%1" does not exist.', $verseCode));
        }
        return $verse->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        SearchCriteriaInterface $criteria
    ) {
        $collection = $this->verseCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            VerseInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        /** @var VerseSearchResultsInterface $searchResults */
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
        VerseInterface $verse
    ) {
        try {
            $verseModel = $this->verseFactory->create();
            $this->resource->load($verseModel, $verse->getVerseId());
            $this->resource->delete($verseModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Verse: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($verseId)
    {
        return $this->delete($this->get($verseId));
    }
}
