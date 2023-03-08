<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Widget;

use ITZielArt\TorahVerse\Model\Config;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;

abstract class Slider extends Template implements BlockInterface
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @var JsonSerializer
     */
    private $jsonSerializer;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        JsonSerializer $jsonSerializer,
        Template\Context $context,
        array $data = []
    ) {
        $this->config = $config;
        $this->jsonSerializer = $jsonSerializer;
        parent::__construct($context, $data);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('ITZielArt_TorahVerse::widget/slider.phtml');
        parent::_construct();
    }

    /**
     */
    public function isVisible(): bool
    {
        return $this->config->isModuleEnable();
    }

    /**
     */
    public function getConfig(): array
    {
        return [
            'enabled' => $this->config->isModuleEnable(),
            'sweep_time' => $this->config->getModuleSweepTime(),
            'is_vertical_sweep_possible' => $this->config->isModuleVertical(),
            'is_group_colours_enable' => $this->config->isModuleGroupColour()
        ];
    }

    /**
     */
    abstract public function getItems(): array;

    public function arrayToJson(array $inputArray): string
    {
        return $this->jsonSerializer->serialize($inputArray);
    }
}
