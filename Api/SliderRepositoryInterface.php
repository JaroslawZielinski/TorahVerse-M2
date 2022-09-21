<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use ITZielArt\TorahVerse\Api\Data\SliderInterface;
use ITZielArt\TorahVerse\Api\Data\SliderSearchResultsInterface;

interface SliderRepositoryInterface
{
    /**
     * @param SliderInterface $slider
     * @return SliderInterface
     * @throws LocalizedException
     */
    public function save(
        SliderInterface $slider
    );
    /**
     * @param string $sliderId
     * @return SliderInterface
     * @throws LocalizedException
     */
    public function get($sliderId);
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SliderSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );
    /**
     * @param SliderInterface $slider
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        SliderInterface $slider
    );
    /**
     * @param string $sliderId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($sliderId);
}
