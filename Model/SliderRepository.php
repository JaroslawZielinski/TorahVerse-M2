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
use ITZielArt\TorahVerse\Api\Data\SliderInterface;
use ITZielArt\TorahVerse\Api\Data\SliderInterfaceFactory;
use ITZielArt\TorahVerse\Api\Data\SliderSearchResultsInterface;
use ITZielArt\TorahVerse\Api\Data\SliderSearchResultsInterfaceFactory;
use ITZielArt\TorahVerse\Api\SliderRepositoryInterface;
use ITZielArt\TorahVerse\Model\ResourceModel\Slider as ResourceSlider;
use ITZielArt\TorahVerse\Model\ResourceModel\Slider\CollectionFactory as SliderCollectionFactory;

class SliderRepository implements SliderRepositoryInterface
{
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var ResourceSlider
     */
    private $resource;

    /**
     * @var SliderInterfaceFactory
     */
    private $dataSliderFactory;

    /**
     * @var ExtensibleDataObjectConverter
     */
    private $extensibleDataObjectConverter;

    /**
     * @var SliderSearchResultsInterfaceFactory
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
     * @var SliderFactory
     */
    private $sliderFactory;

    /**
     * @var SliderCollectionFactory
     */
    private $sliderCollectionFactory;

    /**
     * @var JoinProcessorInterface
     */
    private $extensionAttributesJoinProcessor;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    public function __construct(
        ResourceSlider $resource,
        SliderFactory $sliderFactory,
        SliderInterfaceFactory $dataSliderFactory,
        SliderCollectionFactory $sliderCollectionFactory,
        SliderSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->sliderFactory = $sliderFactory;
        $this->dataSliderFactory = $dataSliderFactory;
        $this->sliderCollectionFactory = $sliderCollectionFactory;
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
        SliderInterface $slider
    ) {
        $sliderData = $this->extensibleDataObjectConverter->toNestedArray(
            $slider,
            [],
            SliderInterface::class
        );

        $sliderModel = $this->sliderFactory->create()->setData($sliderData);

        try {
            $this->resource->save($sliderModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the Slider: %1',
                $exception->getMessage()
            ));
        }
        return $sliderModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($sliderId)
    {
        $slider = $this->sliderFactory->create();
        $this->resource->load($slider, $sliderId);
        if (!$slider->getId()) {
            throw new NoSuchEntityException(__('Slider with id "%1" does not exist.', $sliderId));
        }
        return $slider->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        SearchCriteriaInterface $criteria
    ) {
        $collection = $this->sliderCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            SliderInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        /** @var SliderSearchResultsInterface $searchResults */
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
        SliderInterface $slider
    ) {
        try {
            $sliderModel = $this->sliderFactory->create();
            $this->resource->load($sliderModel, $slider->getSliderId());
            $this->resource->delete($sliderModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Slider: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($sliderId)
    {
        return $this->delete($this->get($sliderId));
    }
}
