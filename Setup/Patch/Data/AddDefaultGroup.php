<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Setup\Patch\Data;

use ITZielArt\TorahVerse\Api\ColourRepositoryInterface;
use ITZielArt\TorahVerse\Api\Data\ColourInterface;
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
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;
    /**
     * @var ColourRepositoryInterface
     */
    private $colourRepository;

    public function __construct(
        GroupFactory $groupFactory,
        GroupRepositoryInterface $groupRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        ColourRepositoryInterface $colourRepository
    ) {
        $this->groupFactory = $groupFactory;
        $this->groupRepository = $groupRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->colourRepository = $colourRepository;
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
     * @throws LocalizedException
     */
    private function getNoColorId(): ?int
    {
        $this->searchCriteriaBuilder->addFilter(ColourInterface::COLOUR_VALUE, ColourInterface::NOCOLOR);
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $colours = $this->colourRepository->getList($searchCriteria)->getItems();
        /** @var Colour $noColour */
        $noColour = reset($colours);
        if (empty($noColour)) {
            return null;
        }
        return (int)$noColour->getColourId();
    }

    /**
     * @inheritDoc
     * @throws LocalizedException
     */
    public function apply()
    {
        /** @var Group $group */
        $group = $this->groupFactory->create();
        $groupData = $group->getDataModel();
        $groupData->setName('Default');
        $noColorId = $this->getNoColorId();
        $groupData->setColourId($noColorId);
        $this->groupRepository->save($groupData);
    }
}
