<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel\Slider;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ITZielArt\TorahVerse\Model\Slider;
use ITZielArt\TorahVerse\Model\ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'slider_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            Slider::class,
            ResourceModel\Slider::class
        );
    }
}
