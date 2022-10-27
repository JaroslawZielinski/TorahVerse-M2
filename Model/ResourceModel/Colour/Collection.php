<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel\Colour;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ITZielArt\TorahVerse\Model\Colour;
use ITZielArt\TorahVerse\Model\ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'colour_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            Colour::class,
            ResourceModel\Colour::class
        );
    }
}
