<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Widget\Slider;

use ITZielArt\TorahVerse\Block\Widget\Slider;
use ITZielArt\TorahVerse\Helper\Data;

/**
 * @method string getCode()
 */
class Custom extends Slider
{
    /**
     * @inheritDoc
     */
    public function isVisible(): bool
    {
        $sliders = $this->config->getCustomSliders();
        $code = $this->getCode() ?? 'test234';
        $result = Data::assocArrayKeySearch($code, $sliders);
        return parent::isVisible() && $this->config->isCustomEnable() &&
            !empty($result);
    }

    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        $config = parent::getConfig();
        $config['enabled'] = !!$config['enabled'] && $this->config->isCustomEnable();
        if ($this->config->isCustomOverride()) {
            $config['sweep_time'] = $this->config->getCustomSweepTime();
            $config['is_vertical_sweep_possible'] = $this->config->isCustomVertical();
            $config['is_group_colours_enable'] = $this->config->isCustomGroupColour();
        }
        return $config;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        //TODO: prepareItems
        return [
            'Jaro2',
            'Daro2',
            'Czaro2',
            'Maro2',
            'Karo2',
            'Laro2',
            'Naro2',
            'Zaro2'
        ];
    }
}
