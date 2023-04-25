<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\System\Config;

use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Backend\Block\Widget\Button;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;

class TranslatePreset extends Field
{
    /**
     * @inheritDoc
     */
    protected $_template = 'JaroslawZielinski_TorahVerse::system/config/translatepreset.phtml';

    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        Context $context,
        array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * @inheritDoc
     */
    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    /**
     * @inheritDoc
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }

    /**
     * Return ajax url for collect button
     *
     * @return string
     */
    public function getAjaxUrl(): string
    {
        return $this->getUrl('jaroslawzielinski_torahverse/system_config/translate');
    }

    /**
     * Generate collect button html
     *
     * @return string
     */
    public function getButtonHtml()
    {
        $language = $this->config->getInternalizationLanguage();
        $languageLabel = __(Language::LANGUAGE_OPTIONS[$language]['label']);

        $button = $this->getLayout()->createBlock(
            Button::class
        )->setData(
            [
                'id' => 'translate_preset_button',
                'label' => __('Update for \'%1\'', $languageLabel),
            ]
        );

        return $button->toHtml();
    }
}
