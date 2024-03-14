<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\ResourceModel;

use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;

class Verse extends AbstractUninstall
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_verses', VerseInterface::VERSE_ID);
    }
}
