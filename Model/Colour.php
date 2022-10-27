<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use ITZielArt\TorahVerse\Api\Data\ColourInterface;
use ITZielArt\TorahVerse\Api\Data\ColourInterfaceFactory;
use ITZielArt\TorahVerse\Model\ResourceModel\Colour\Collection;

class Colour extends AbstractModel
{
    /**
     * @var ColourInterfaceFactory
     */
    protected $colourDataFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     * @var string
     */
    protected $_eventPrefix = 'torahverse_colours';

    /**
     * @inheritDoc
     */
    public function __construct(
        ColourInterfaceFactory $colourDataFactory,
        DataObjectHelper $dataObjectHelper,
        Context $context,
        Registry $registry,
        ResourceModel\Colour $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->colourDataFactory = $colourDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    public function getDataModel(): ColourInterface
    {
        $colourData = $this->getData();

        $colourDataObject = $this->colourDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $colourDataObject,
            $colourData,
            Colour::class
        );

        return $colourDataObject;
    }
}
