<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\Verses;

use JaroslawZielinski\TorahVerse\Controller\Adminhtml\Grid;

class Index extends Grid
{
    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('JaroslawZielinski_TorahVerse::verses');
    }

    /**
     * @inheritDoc
     */
    protected function getTitle(): string
    {
        return (string)__('Verses');
    }
}
