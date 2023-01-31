<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Verse;

use ITZielArt\TorahVerse\Model\ResourceModel\Verse\CollectionFactory;
use ITZielArt\TorahVerse\Model\Verse;
use Magento\Framework\UrlInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Magento\Framework\App\Request\DataPersistorInterface;

class DataProvider extends AbstractDataProvider
{
    /**
     * @var array
     */
    protected $loadedData;
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
        CollectionFactory $customerFactory,
        DataPersistorInterface $dataPersistor,
        string $name,
        string $primaryFieldName,
        string $requestFieldName,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $customerFactory->create();
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
        $verses = $this->collection->getItems();
        /** @var $verses Verse */
        foreach ($verses as $verse) {
            $this->loadedData[$verse->getId()] = $verse->getData();
        }
        /** @var Verse $verse */
        $verse = $this->dataPersistor->get('itzielart_verses');
        if (!empty($verse)) {
            $this->loadedData[$verse->getVerseId()] = $verse->getData();
            $this->dataPersistor->clear('itzielart_verses');
        }
        return $this->loadedData;
    }
}
