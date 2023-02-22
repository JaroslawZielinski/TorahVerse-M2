<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Setup\Patch\Data;

use ITZielArt\TorahVerse\Api\ColourRepositoryInterface;
use ITZielArt\TorahVerse\Api\Data\ColourInterface;
use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Model\Data\Colour;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use ITZielArt\TorahVerse\Model\Group;
use ITZielArt\TorahVerse\Model\GroupFactory;
use ITZielArt\TorahVerse\Api\GroupRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;

class AddDefaultGroup implements DataPatchInterface
{
    /**
     * @var GroupFactory
     */
    private $groupFactory;
    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;

    public function __construct(
        GroupFactory $groupFactory,
        GroupRepositoryInterface $groupRepository
    ) {
        $this->groupFactory = $groupFactory;
        $this->groupRepository = $groupRepository;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritDoc
     * @throws LocalizedException
     */
    public function apply()
    {
        $group = $this->groupFactory->create();
        $groupData = $group->getDataModel();
        $groupData->setName('Default');
        $groupData->setColourValue(GroupInterface::NO_COLOUR);
        $this->groupRepository->save($groupData);
    }
}
