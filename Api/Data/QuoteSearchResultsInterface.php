<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface QuoteSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return QuoteInterface[]
     */
    public function getItems();

    /**
     * @param QuoteInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
