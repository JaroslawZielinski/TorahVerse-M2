<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Widget\Slider;

use ITZielArt\TorahVerse\Block\Adminhtml\Widget\Slider;

class Backend extends Slider
{
    /**
     * @inheritDoc
     */
    public function isVisible(): bool
    {
        $backendSliderEnable = $this->config->isBackendEnable();
        return parent::isVisible() && $backendSliderEnable;
    }

    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        $config = parent::getConfig();
        $config['enabled'] = !!$config['enabled'] && $this->config->isBackendEnable();
        if ($this->config->isBackendOverride()) {
            $config['sweep_time'] = $this->config->getBackendSweepTime();
            $config['is_vertical_sweep_possible'] = $this->config->isBackendVertical();
            $config['vertical_sweep_time'] = $this->config->getBackendVerticalSweepTime();
            $config['is_group_colours'] = $this->config->isBackendGroupColour();
            $config['verses_ordered'] = $this->config->isBackendVersesOrdered();
            $config['text_colour'] = $this->config->getBackendTextColour();
            $config['mode'] = $this->config->getBackendMode();
        }
        $config['items'] = $this->getItems();
        return $config;
    }

    /**
     * @inheritDoc
     */
    public function getItems(array $groupsArray = []): array
    {
        $groupsArray = $this->config->getBackendSlider();
        return parent::getItems($groupsArray);
    }
}
