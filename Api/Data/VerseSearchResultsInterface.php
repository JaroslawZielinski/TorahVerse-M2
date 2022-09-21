<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface VerseSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return VerseInterface[]
     */
    public function getItems();
    /**
     * @param VerseInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
