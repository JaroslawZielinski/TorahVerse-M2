<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block;

use Magento\Framework\View\Element\Template;
use Magento\Ui\Component\Wrapper\UiComponent;

class Pick extends Template
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::pick.phtml');
        parent::_construct();
    }

    /**
     *  Returns component ui form field (value part)
     */
    private function getVersePickComponent(): ?UiComponent
    {
        $uiComponents = $this->_layout->getAllBlocks();
        return $uiComponents['jaroslawzielinski_torahverse_siglumpick_form'] ?? null;
    }

    /**
     */
    public function getVersePickComponentHtml(): string
    {
        $uiVersePickComponent = $this->getVersePickComponent();
        return !empty($uiVersePickComponent) ? $uiVersePickComponent->toHtml() : 'empty';
    }

    /**
     */
    public function getFormHtmlId(): string
    {
        return 'torahverse-pick';
    }
}
