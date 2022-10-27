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
use ITZielArt\TorahVerse\Api\Data\ColourInterface;
use ITZielArt\TorahVerse\Api\Data\ColourInterfaceFactory;
use ITZielArt\TorahVerse\Api\Data\ColourSearchResultsInterface;
use ITZielArt\TorahVerse\Api\Data\ColourSearchResultsInterfaceFactory;
use ITZielArt\TorahVerse\Api\ColourRepositoryInterface;
use ITZielArt\TorahVerse\Model\ResourceModel\Colour as ResourceColour;
use ITZielArt\TorahVerse\Model\ResourceModel\Colour\CollectionFactory as ColourCollectionFactory;

class ColourRepository implements ColourRepositoryInterface
{
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var ResourceColour
     */
    private $resource;

    /**
     * @var ColourInterfaceFactory
     */
    private $dataColourFactory;

    /**
     * @var ExtensibleDataObjectConverter
     */
    private $extensibleDataObjectConverter;

    /**
     * @var ColourSearchResultsInterfaceFactory
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
     * @var ColourFactory
     */
    private $colourFactory;

    /**
     * @var ColourCollectionFactory
     */
    private $colourCollectionFactory;

    /**
     * @var JoinProcessorInterface
     */
    private $extensionAttributesJoinProcessor;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    public function __construct(
        ResourceColour $resource,
        ColourFactory $colourFactory,
        ColourInterfaceFactory $dataColourFactory,
        ColourCollectionFactory $colourCollectionFactory,
        ColourSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->colourFactory = $colourFactory;
        $this->dataColourFactory = $dataColourFactory;
        $this->colourCollectionFactory = $colourCollectionFactory;
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
        ColourInterface $colour
    ) {
        $colourData = $this->extensibleDataObjectConverter->toNestedArray(
            $colour,
            [],
            ColourInterface::class
        );

        $colourModel = $this->colourFactory->create()->setData($colourData);

        try {
            $this->resource->save($colourModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the Colour: %1',
                $exception->getMessage()
            ));
        }
        return $colourModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($colourId)
    {
        $colour = $this->colourFactory->create();
        $this->resource->load($colour, $colourId);
        if (!$colour->getId()) {
            throw new NoSuchEntityException(__('Colour with id "%1" does not exist.', $colourId));
        }
        return $colour->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        SearchCriteriaInterface $criteria
    ) {
        $collection = $this->colourCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            ColourInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        /** @var ColourSearchResultsInterface $searchResults */
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
        ColourInterface $colour
    ) {
        try {
            $colourModel = $this->colourFactory->create();
            $this->resource->load($colourModel, $colour->getColourId());
            $this->resource->delete($colourModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Colour: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($colourId)
    {
        return $this->delete($this->get($colourId));
    }
}
