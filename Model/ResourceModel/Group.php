<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Group extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_groups', GroupInterface::GROUP_ID);
    }
}