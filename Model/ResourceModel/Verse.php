<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel;

use ITZielArt\TorahVerse\Api\Data\VerseInterface;
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
