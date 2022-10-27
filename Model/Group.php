<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Api\Data\GroupInterfaceFactory;
use ITZielArt\TorahVerse\Model\ResourceModel\Group\Collection;

class Group extends AbstractModel
{
    /**
     * @var GroupInterfaceFactory
     */
    protected $groupDataFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     * @var string
     */
    protected $_eventPrefix = 'torahverse_groups';

    /**
     * @inheritDoc
     */
    public function __construct(
        GroupInterfaceFactory $groupDataFactory,
        DataObjectHelper $dataObjectHelper,
        Context $context,
        Registry $registry,
        ResourceModel\Group $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->groupDataFactory = $groupDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    public function getDataModel(): GroupInterface
    {
        $groupData = $this->getData();

        $groupDataObject = $this->groupDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $groupDataObject,
            $groupData,
            Group::class
        );

        return $groupDataObject;
    }
}
