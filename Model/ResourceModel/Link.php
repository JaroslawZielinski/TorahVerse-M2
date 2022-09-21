<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel;

use ITZielArt\TorahVerse\Api\Data\LinkInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Link extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_sliders_verses', LinkInterface::LINK_ID);
    }
}
