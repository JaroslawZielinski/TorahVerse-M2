<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use ITZielArt\TorahVerse\Api\Data\QuoteInterface;
use ITZielArt\TorahVerse\Api\Data\QuoteInterfaceFactory;
use ITZielArt\TorahVerse\Model\ResourceModel\Quote\Collection;

class Quote extends AbstractModel
{
    /**
     * @var QuoteInterfaceFactory
     */
    protected $quoteDataFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     * @var string
     */
    protected $_eventPrefix = 'torahverse_quotes';

    /**
     * @inheritDoc
     */
    public function __construct(
        QuoteInterfaceFactory $quoteDataFactory,
        DataObjectHelper $dataObjectHelper,
        Context $context,
        Registry $registry,
        ResourceModel\Quote $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->quoteDataFactory = $quoteDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    public function getDataModel(): QuoteInterface
    {
        $quoteData = $this->getData();

        $quoteDataObject = $this->quoteDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $quoteDataObject,
            $quoteData,
            Quote::class
        );

        return $quoteDataObject;
    }
}
