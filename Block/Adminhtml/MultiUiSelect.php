<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class MultiUiSelect extends Field
{
    public const SELECT_PLACEHOLDER = 'Select Group';
    /**
     * @inheritDoc
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        $script = " <script>
                require([
                    'jquery',
                    'chosen'
                ], function ($, chosen) {
                    $('#" . $element->getId() . "').chosen({
                        width: '100%',
                        placeholder_text: '" . __(self::SELECT_PLACEHOLDER) . "'
                    });
                })
            </script>";
        return parent::_getElementHtml($element) . $script;
    }
}
