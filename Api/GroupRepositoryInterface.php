<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Api\Data\GroupSearchResultsInterface;

interface GroupRepositoryInterface
{
    /**
     * @param GroupInterface $group
     * @return GroupInterface
     * @throws LocalizedException
     */
    public function save(
        GroupInterface $group
    );

    /**
     * @param string $groupId
     * @return GroupInterface
     * @throws LocalizedException
     */
    public function get($groupId);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return GroupSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );

    /**
     * @param GroupInterface $group
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        GroupInterface $group
    );

    /**
     * @param string $groupId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($groupId);
}