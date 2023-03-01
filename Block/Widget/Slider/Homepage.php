<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Widget\Slider;

use ITZielArt\TorahVerse\Model\Config;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * @method string getPlacement()
 */
class Homepage extends Template implements BlockInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->config = $config;
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('ITZielArt_TorahVerse::widget/slider/homepage.phtml');
        parent::_construct();
    }

    public function getConfigPlacement(): array
    {
        return $this->config->getFrontendPlacement();
    }
}
