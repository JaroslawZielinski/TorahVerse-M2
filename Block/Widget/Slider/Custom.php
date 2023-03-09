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
        $code = $this->getCode();
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
    public function getVerseConfig(): array
    {
        $verseConfig = parent::getVerseConfig();
        if ($this->config->isCustomOverride()) {
            $verseConfig['verses_ordered'] = $this->config->isCustomVersesOrdered();
        }
        return $verseConfig;
    }

    /**
     * @inheritDoc
     */
    public function getItems(array $groupsArray = []): array
    {
        $groupsArray = $this->config->getCustomSlider($this->getCode());
        return parent::getItems($groupsArray);
    }
}
