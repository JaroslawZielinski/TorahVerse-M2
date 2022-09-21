<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Verses;

use JaroslawZielinski\TorahVerse\Model\Group;
use JaroslawZielinski\TorahVerse\Model\Data\Group as DataGroup;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Group\CollectionFactory;
use Magento\Framework\Option\ArrayInterface;

class Groups implements ArrayInterface
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    protected $options;

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
                    'value' => $groupData->getGroupId(),
                    'label' => __($groupData->getName())
                ];
            }
            $this->options = $options;
        }
        return $this->options;
    }
}
