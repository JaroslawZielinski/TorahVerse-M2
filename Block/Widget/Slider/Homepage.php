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
     * {@inheritDoc}
     * @throws \Exception
     */
    public function getConfig(): array
    {
        $config = parent::getConfig();
        $config['enabled'] = !!$config['enabled'] && $this->config->isFrontendEnable();
        if ($this->config->isFrontendOverride()) {
            $config['sweep_time'] = $this->config->getFrontendSweepTime();
            $config['is_vertical_sweep_possible'] = $this->config->isFrontendVertical();
            $config['vertical_sweep_time'] = $this->config->getFrontendVerticalSweepTime();
        }
        $config['items'] = $this->getItems();
        return $config;
    }

    /**
     * @inheritDoc
     */
    public function getItems(array $groupsArray = []): array
    {
        $groupsArray = $this->config->getFrontendSlider();
        return parent::getItems($groupsArray);
    }
}
