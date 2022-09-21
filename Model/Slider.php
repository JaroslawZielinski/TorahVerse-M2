<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use ITZielArt\TorahVerse\Api\Data\SliderInterface;
use ITZielArt\TorahVerse\Api\Data\SliderInterfaceFactory;
use ITZielArt\TorahVerse\Model\ResourceModel\Slider\Collection;

class Slider extends AbstractModel
{
    /**
     * @var SliderInterfaceFactory
     */
    protected $sliderDataFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     * @var string
     */
    protected $_eventPrefix = 'torahverse_sliders';

    /**
     * @inheritDoc
     */
    public function __construct(
        SliderInterfaceFactory $sliderDataFactory,
        DataObjectHelper $dataObjectHelper,
        Context $context,
        Registry $registry,
        ResourceModel\Slider $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->sliderDataFactory = $sliderDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    public function getDataModel(): SliderInterface
    {
        $sliderData = $this->getData();

        $sliderDataObject = $this->sliderDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $sliderDataObject,
            $sliderData,
            Slider::class
        );

        return $sliderDataObject;
    }
}
