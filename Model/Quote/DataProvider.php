<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Quote;

use JaroslawZielinski\TorahVerse\Model\ResourceModel\Quote\CollectionFactory;
use JaroslawZielinski\TorahVerse\Model\Quote;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Magento\Framework\App\Request\DataPersistorInterface;

class DataProvider extends AbstractDataProvider
{
    /**
     * @var array
     */
    private $loadedData;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @see https://magento.stackexchange.com/questions/352671/magento-2-4-constructing-controller-url-adminbackend-in-javascript#answer-352675
     *
     * @inheritDoc
     */
    public function __construct(
        CollectionFactory $quoteCollectionFactory,
        DataPersistorInterface $dataPersistor,
        string $name,
        string $primaryFieldName,
        string $requestFieldName,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $quoteCollectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @inheritDoc
     */
    public function getData(): array
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $quotes = $this->collection->getItems();
        /** @var Quote $quote */
        foreach ($quotes as $quote) {
            $this->loadedData[$quote->getId()] = $quote->getData();
        }
        /** @var Quote $quote */
        $quote = $this->dataPersistor->get('jaroslawzielinski_quotes');
        if (!empty($quote)) {
            $this->loadedData[$quote->getQuoteId()] = $quote->getData();
            $this->dataPersistor->clear('jaroslawzielinski_quotes');
        }
        return $this->loadedData;
    }
}
