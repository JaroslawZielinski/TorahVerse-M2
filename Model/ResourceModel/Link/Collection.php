<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel\Link;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ITZielArt\TorahVerse\Model\Link;
use ITZielArt\TorahVerse\Model\ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'link_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            Link::class,
            ResourceModel\Link::class
        );
    }
}
