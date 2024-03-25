<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface GroupSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return GroupInterface[]
     */
    public function getItems();

    /**
     * @param GroupInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
