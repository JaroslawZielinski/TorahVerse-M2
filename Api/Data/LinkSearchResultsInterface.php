<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface LinkSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return LinkInterface[]
     */
    public function getItems();
    /**
     * @param LinkInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
