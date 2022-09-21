<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use ITZielArt\TorahVerse\Api\Data\LinkInterface;
use ITZielArt\TorahVerse\Api\Data\LinkSearchResultsInterface;

interface LinkRepositoryInterface
{
    /**
     * @param LinkInterface $link
     * @return LinkInterface
     * @throws LocalizedException
     */
    public function save(
        LinkInterface $link
    );
    /**
     * @param string $linkId
     * @return LinkInterface
     * @throws LocalizedException
     */
    public function get($linkId);
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return LinkSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );
    /**
     * @param LinkInterface $link
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        LinkInterface $link
    );
    /**
     * @param string $linkId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($linkId);
}
