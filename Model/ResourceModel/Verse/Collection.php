<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel\Verse;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ITZielArt\TorahVerse\Model\Verse;
use ITZielArt\TorahVerse\Model\ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'verse_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            Verse::class,
            ResourceModel\Verse::class
        );
    }
}