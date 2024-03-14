<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\Widget;

use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\View\Helper\SecureHtmlRenderer;
use Magento\Framework\Data\Form\Element\AbstractElement;

class CacheButton extends Field
{
    /**
     * html id of config row
     */
    private const JAROSLAWZIELINSKI_TORAHVERSE_WARM_UP_BUTTON = 'jaroslawzielinski_torahverse_warm_up_button_';

    /**
     * @var Config
     */
    private $config;

    /**
     * @var string
     */
    private $translation;

    /**
     * @inheritDoc
     */
    protected $_template = 'JaroslawZielinski_TorahVerse::system/config/cachebutton.phtml';

    /**
     * @inheritDoc
     */
    public function __construct(
        string $translation,
        Config $config,
        Context $context,
        array $data = [],
        ?SecureHtmlRenderer $secureRenderer = null
    ) {
        $this->translation = $translation;
        $this->config = $config;
        parent::__construct($context, $data, $secureRenderer);
    }
    
    /**
     */
    public function getConfigWarmUpHtmlId(): string
    {
        return self::JAROSLAWZIELINSKI_TORAHVERSE_WARM_UP_BUTTON . $this->translation;
    }
    
    /**
     */
    public function getTranslation(): string
    {
        return $this->translation;
    }

    /**
     * {@inheritDoc}
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }
}
