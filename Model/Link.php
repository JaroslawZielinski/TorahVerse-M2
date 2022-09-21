<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use ITZielArt\TorahVerse\Api\Data\LinkInterface;
use ITZielArt\TorahVerse\Api\Data\LinkInterfaceFactory;
use ITZielArt\TorahVerse\Model\ResourceModel\Link\Collection;

class Link extends AbstractModel
{
    /**
     * @var LinkInterfaceFactory
     */
    protected $linkDataFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     * @var string
     */
    protected $_eventPrefix = 'torahverse_sliders_verses';

    /**
     * @inheritDoc
     */
    public function __construct(
        LinkInterfaceFactory $linkDataFactory,
        DataObjectHelper $dataObjectHelper,
        Context $context,
        Registry $registry,
        ResourceModel\Link $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->linkDataFactory = $linkDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    public function getDataModel(): LinkInterface
    {
        $linkData = $this->getData();

        $linkDataObject = $this->linkDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $linkDataObject,
            $linkData,
            Link::class
        );

        return $linkDataObject;
    }
}
