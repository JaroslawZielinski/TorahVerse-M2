<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use JaroslawZielinski\TorahVerse\Api\Data\QuoteInterface;
use JaroslawZielinski\TorahVerse\Api\Data\QuoteSearchResultsInterface;

interface QuoteRepositoryInterface
{
    /**
     * @param QuoteInterface $quote
     * @return QuoteInterface
     * @throws LocalizedException
     */
    public function save(
        QuoteInterface $quote
    );

    /**
     * @param string $quoteId
     * @return QuoteInterface
     * @throws LocalizedException
     */
    public function get($quoteId);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return QuoteSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );

    /**
     * @param QuoteInterface $quote
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        QuoteInterface $quote
    );

    /**
     * @param string $quoteId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($quoteId);
}
