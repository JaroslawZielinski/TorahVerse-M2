<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface ColourSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return ColourInterface[]
     */
    public function getItems();
    /**
     * @param ColourInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
