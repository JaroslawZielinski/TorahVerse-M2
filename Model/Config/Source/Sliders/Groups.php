<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders;

use JaroslawZielinski\TorahVerse\Model\Data\Group;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Group\CollectionFactory;
use Magento\Framework\Data\OptionSourceInterface;

class Groups implements OptionSourceInterface
{
    /**
     * @var CollectionFactory
     */
    private $groupCollectionFactory;

    /**
     * @var array
     */
    private $optionArray;

    public function __construct(CollectionFactory $groupCollectionFactory)
    {
        $this->groupCollectionFactory = $groupCollectionFactory;
    }

    /**
     * @inheritDoc
     */
    public function toOptionArray(): array
    {
        if (empty($this->optionArray)) {
            $this->optionArray = [];
            $groups = $this->groupCollectionFactory->create();
            /** @var Group $group */
            foreach ($groups as $group) {
                $this->optionArray[] = [
                    'value' => $group->getCode(),
                    'label' => $group->getName()
                ];
            }
        }
        return $this->optionArray;
    }
}
