<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\ResourceModel;

use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;

class Group extends AbstractUninstall
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_groups', GroupInterface::GROUP_ID);
    }
}
