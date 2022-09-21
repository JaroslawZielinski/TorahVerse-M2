<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface SliderSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return SliderInterface[]
     */
    public function getItems();
    /**
     * @param SliderInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
