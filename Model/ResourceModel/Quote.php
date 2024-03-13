<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\ResourceModel;

use JaroslawZielinski\TorahVerse\Api\Data\QuoteInterface;

class Quote extends AbstractUninstall
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_quotes', QuoteInterface::QUOTE_ID);
    }
}
