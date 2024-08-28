<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\BibleTools;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class VerseConfig extends Template
{
    /**
     * @var array
     */
    private $tabs;

    /**
     * @inheritDoc
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        $this->tabs = $data['tabs'] ?? [];
        parent::__construct($context, $data);
    }

    /**
     */
    public function getTabs(): array
    {
        return $this->tabs;
    }

    /**
     */
    public function getActiveTab()
    {
        $keys = array_keys($this->tabs);
        return reset($keys);
    }
}
