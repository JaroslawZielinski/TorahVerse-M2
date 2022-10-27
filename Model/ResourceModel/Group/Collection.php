<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel\Group;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ITZielArt\TorahVerse\Model\Group;
use ITZielArt\TorahVerse\Model\ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'group_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            Group::class,
            ResourceModel\Group::class
        );
    }
}
