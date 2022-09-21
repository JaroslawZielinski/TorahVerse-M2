<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\ResourceModel;

use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Verse extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_verses', VerseInterface::VERSE_ID);
    }
}
