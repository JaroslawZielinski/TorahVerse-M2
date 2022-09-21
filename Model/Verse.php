<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use ITZielArt\TorahVerse\Api\Data\VerseInterface;
use ITZielArt\TorahVerse\Api\Data\VerseInterfaceFactory;
use ITZielArt\TorahVerse\Model\ResourceModel\Verse\Collection;

class Verse extends AbstractModel
{
    /**
     * @var VerseInterfaceFactory
     */
    protected $verseDataFactory;

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
        VerseInterfaceFactory $verseDataFactory,
        DataObjectHelper $dataObjectHelper,
        Context $context,
        Registry $registry,
        ResourceModel\Verse $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->verseDataFactory = $verseDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    public function getDataModel(): VerseInterface
    {
        $verseData = $this->getData();

        $verseDataObject = $this->verseDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $verseDataObject,
            $verseData,
            Verse::class
        );

        return $verseDataObject;
    }
}
