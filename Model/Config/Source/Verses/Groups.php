<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Config\Source\Verses;

use ITZielArt\TorahVerse\Model\Group;
use ITZielArt\TorahVerse\Model\Data\Group as DataGroup;
use ITZielArt\TorahVerse\Model\ResourceModel\Group\CollectionFactory;
use Magento\Framework\Option\ArrayInterface;

class Groups implements ArrayInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    private $options;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @inheritDoc
     */
    public function toOptionArray(): ?array
    {
        if (empty($this->options)) {
            $options = [];
            $optionsCollection = $this->collectionFactory->create()->load();
            /** @var Group $group */
            foreach ($optionsCollection as $group) {
                /** @var DataGroup $groupData */
                $groupData = $group->getDataModel();
                $options[] = [
                    'value' => $groupData->getCode(),
                    'label' => __($groupData->getName())
                ];
            }
            $this->options = $options;
        }
        return $this->options;
    }
}
