<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block;

use Magento\Framework\View\Element\Template;

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
     */
    private function getInputTorahBlock()
    {
        return $this->getChildBlock('input_Torah');
    }

    /**
     */
    public function getInputTorahBlockHtml(): string
    {
        /** @var  $inputTorahBlock */
        $inputTorahBlock = $this->getInputTorahBlock();
        return !empty($inputTorahBlock) ? $inputTorahBlock->toHtml() : 'empty';
    }

    /**
     */
    public function getFormHtmlId(): string
    {
        return 'torahverse-pick';
    }
}
