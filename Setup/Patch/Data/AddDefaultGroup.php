<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use JaroslawZielinski\TorahVerse\Api\ColourRepositoryInterface;
use JaroslawZielinski\TorahVerse\Api\Data\ColourInterface;
use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;
use JaroslawZielinski\TorahVerse\Model\Data\Colour;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use JaroslawZielinski\TorahVerse\Model\Group;
use JaroslawZielinski\TorahVerse\Model\GroupFactory;
use JaroslawZielinski\TorahVerse\Api\GroupRepositoryInterface;
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
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases(): array
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
