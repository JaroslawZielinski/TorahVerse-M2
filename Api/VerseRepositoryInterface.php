<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;
use JaroslawZielinski\TorahVerse\Api\Data\VerseSearchResultsInterface;

interface VerseRepositoryInterface
{
    /**
     * @param VerseInterface $verse
     * @return VerseInterface
     * @throws LocalizedException
     */
    public function save(
        VerseInterface $verse
    );

    /**
     * @param string $verseId
     * @return VerseInterface
     * @throws LocalizedException
     */
    public function get($verseId);

    /**
     * @param string $verseCode
     * @return VerseInterface
     * @throws LocalizedException
     */
    public function getByCode($verseCode);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return VerseSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );

    /**
     * @param VerseInterface $verse
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        VerseInterface $verse
    );

    /**
     * @param string $verseId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($verseId);
}
