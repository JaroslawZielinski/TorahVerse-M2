<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Group;

use ITZielArt\TorahVerse\Model\ResourceModel\Group\CollectionFactory;
use ITZielArt\TorahVerse\Model\Group;
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
        CollectionFactory $groupCollectionFactory,
        DataPersistorInterface $dataPersistor,
        string $name,
        string $primaryFieldName,
        string $requestFieldName,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $groupCollectionFactory->create();
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
        $groups = $this->collection->getItems();
        /** @var $groups Group */
        foreach ($groups as $group) {
            $this->loadedData[$group->getId()] =
                array_merge($group->getData(), ['verses_ids' => [], 'quotes_ids' => []]);
        }
        /** @var Group $group */
        $group = $this->dataPersistor->get('itzielart_groups');
        if (!empty($group)) {
            $this->loadedData[$group->getGroupId()] =
                array_merge($group->getData(), ['verses_ids' => [], 'quotes_ids' => []]);
            $this->dataPersistor->clear('itzielart_groups');
        }
        return $this->loadedData;
    }
}
