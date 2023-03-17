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
        $isGroupColoursEnable = $this->config->isBackendGroupColour();
        $config = parent::getConfig();
        $config['enabled'] = !!$config['enabled'] && $this->config->isBackendEnable();
        if ($this->config->isBackendOverride()) {
            $config['verses_ordered'] = $this->config->isBackendVersesOrdered();
            $config['sweep_time'] = $this->config->getBackendSweepTime();
            $config['is_vertical_sweep_possible'] = $this->config->isBackendVertical();
            $config['vertical_sweep_time'] = $this->config->getBackendVerticalSweepTime();
            $config['template'] = $isGroupColoursEnable ?
                $this->config->getModuleGroupColoursTemplate() :
                $this->config->getModuleTemplate();
            $config['verse_colour'] = $this->config->getBackendVerseColour();
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
