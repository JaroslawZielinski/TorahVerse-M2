<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model;

use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;
use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;
use JaroslawZielinski\TorahVerse\Api\GroupRepositoryInterface;
use JaroslawZielinski\TorahVerse\Api\QuoteRepositoryInterface;
use JaroslawZielinski\TorahVerse\Api\VerseRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\Data\Quote as QuoteData;
use JaroslawZielinski\TorahVerse\Model\Data\Verse as VerseData;
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
     * @var QuoteRepositoryInterface
     */
    private $quoteRepository;
    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;

    public function __construct(
        SearchCriteriaBuilder $searchCriteriaBuilder,
        VerseRepositoryInterface $verseRepository,
        QuoteRepositoryInterface $quoteRepository,
        GroupRepositoryInterface $groupRepository
    ) {
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->verseRepository = $verseRepository;
        $this->quoteRepository = $quoteRepository;
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
    public function getByCode($groupCode): GroupInterface
    {
        return $this->groupRepository->getByCode($groupCode);
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
        return $this->getByCode('default');
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
        //Verses
        $verseList = $this->verseRepository->getList($searchCriteria);
        $versesItems = $verseList->getItems();
        /** @var VerseData $verse */
        foreach ($versesItems as $verse) {
            $verse->setGroupId($defaultGroupId);
            $this->verseRepository->save($verse);
        }
        //Quotes
        $quoteList = $this->quoteRepository->getList($searchCriteria);
        $quotesItems = $quoteList->getItems();
        /** @var QuoteData $quote */
        foreach ($quotesItems as $quote) {
            $quote->setGroupId($defaultGroupId);
            $this->quoteRepository->save($quote);
        }
    }
}
