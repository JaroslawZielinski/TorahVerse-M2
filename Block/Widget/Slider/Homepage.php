<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Widget\Slider;

use ITZielArt\TorahVerse\Block\Widget\Slider;

/**
 * @method string getPlacement()
 */
class Homepage extends Slider
{
    /**
     * @inheritDoc
     */
    public function isVisible(): bool
    {
        $homePageSliderEnable = $this->config->isFrontendEnable();
        return parent::isVisible() && $homePageSliderEnable &&
            in_array($this->getPlacement(), $this->config->getFrontendPlacement());
    }

    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        $config = parent::getConfig();
        $config['enabled'] = !!$config['enabled'] && $this->config->isFrontendEnable();
        if ($this->config->isFrontendOverride()) {
            $config['sweep_time'] = $this->config->getFrontendSweepTime();
            $config['is_vertical_sweep_possible'] = $this->config->isFrontendVertical();
            $config['is_group_colours_enable'] = $this->config->isFrontendGroupColour();
        }
        return $config;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        //Prepare Items
        return [
            'Jaro',
            'Daro',
            'Czaro',
            'Maro',
            'Karo',
            'Laro',
            'Naro',
            'Zaro'
        ];
    }
}
