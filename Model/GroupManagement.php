<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Api\Data\GroupSearchResultsInterface;
use ITZielArt\TorahVerse\Api\Data\VerseInterface;
use ITZielArt\TorahVerse\Api\GroupRepositoryInterface;
use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use ITZielArt\TorahVerse\Model\Data\Verse as VerseData;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;

class GroupManagement implements GroupRepositoryInterface
{
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;
    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;
    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;

    public function __construct(
        SearchCriteriaBuilder $searchCriteriaBuilder,
        VerseRepositoryInterface $verseRepository,
        GroupRepositoryInterface $groupRepository
    ) {
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->verseRepository = $verseRepository;
        $this->groupRepository = $groupRepository;
    }

    /**
     * @inheritDoc
     */
    public function save(GroupInterface $group): GroupInterface
    {
        $this->checkIfDefaultGroup($group);
        return $this->groupRepository->save($group);
    }

    /**
     * @inheritDoc
     */
    public function get($groupId): GroupInterface
    {
        return $this->groupRepository->get($groupId);
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        return $this->groupRepository->getList($searchCriteria);
    }

    /**
     * @inheritDoc
     */
    public function delete(GroupInterface $group): bool
    {
        $this->deleteWithDependencies($group);
        return $this->groupRepository->delete($group);
    }

    /**
     * @inheritDoc
     */
    public function deleteById($groupId): bool
    {
        $group = $this->groupRepository->get($groupId);
        $this->deleteWithDependencies($group);
        return $this->groupRepository->delete($group);
    }

    /**
     * @throws LocalizedException
     */
    private function checkIfDefaultGroup(GroupInterface $group): void
    {
        if ('default' === $group->getCode()) {
            throw new LocalizedException(__('You are not supposed to edit/save/delete default group in this project.'));
        }
    }

    /**
     * @throws LocalizedException
     */
    public function getDefaultGroup(): GroupInterface
    {
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter(GroupInterface::CODE, 'default')
            ->create();
        $groupList = $this->groupRepository->getList($searchCriteria);
        $groupsItems = $groupList->getItems();
        return reset($groupsItems);
    }

    /**
     * @throws LocalizedException
     */
    private function deleteWithDependencies(GroupInterface $group): void
    {
        $this->checkIfDefaultGroup($group);
        $defaultGroup = $this->getDefaultGroup();
        $defaultGroupId = (int)$defaultGroup->getGroupId();
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter('main_table.' . VerseInterface::GROUP_ID, $group->getGroupId())
            ->create();
        $verseList = $this->verseRepository->getList($searchCriteria);
        $versesItems = $verseList->getItems();
        /** @var VerseData $verse */
        foreach ($versesItems as $verse) {
            $verse->setGroupId($defaultGroupId);
            $this->verseRepository->save($verse);
        }
    }
}
