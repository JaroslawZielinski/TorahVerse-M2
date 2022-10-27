<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use ITZielArt\TorahVerse\Api\Data\ColourInterface;
use ITZielArt\TorahVerse\Api\Data\ColourSearchResultsInterface;

interface ColourRepositoryInterface
{
    /**
     * @param ColourInterface $colour
     * @return ColourInterface
     * @throws LocalizedException
     */
    public function save(
        ColourInterface $colour
    );

    /**
     * @param string $colourId
     * @return ColourInterface
     * @throws LocalizedException
     */
    public function get($colourId);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return ColourSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );

    /**
     * @param ColourInterface $colour
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        ColourInterface $colour
    );

    /**
     * @param string $colourId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($colourId);
}
