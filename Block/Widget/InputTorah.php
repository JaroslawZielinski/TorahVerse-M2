<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Widget;

use Magento\Framework\View\Element\Template;

/**
 * @method getHtmlId(): string
 */
class InputTorah extends Template
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::widget/inputTorah.phtml');
        parent::_construct();
    }

    /**
     */
    public function getConfig(): array
    {
        $config = $this->getData('config') ?? [];
        $config['previewUrl'] = '/torahverse/siglum/preview';
        $config['structureUrl'] = '/torahverse/siglum/structure';
        return $config;
    }
}
