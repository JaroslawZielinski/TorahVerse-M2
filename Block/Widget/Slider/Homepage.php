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
        $isGroupColoursEnable = $this->config->isFrontendGroupColour();
        $config = parent::getConfig();
        $config['enabled'] = !!$config['enabled'] && $this->config->isFrontendEnable();
        if ($this->config->isFrontendOverride()) {
            $config['sweep_time'] = $this->config->getFrontendSweepTime();
            $config['is_vertical_sweep_possible'] = $this->config->isFrontendVertical();
            $config['vertical_sweep_time'] = $this->config->getFrontendVerticalSweepTime();
            $config['verse_template'] = $isGroupColoursEnable ?
                $this->config->getModuleGroupColoursVerseTemplate() :
                $this->config->getModuleVerseTemplate();
            $config['quote_template'] = $isGroupColoursEnable ?
                $this->config->getModuleGroupColoursQuoteTemplate() :
                $this->config->getModuleQuoteTemplate();
            $config['verses_ordered'] = $this->config->isFrontendVersesOrdered();
            $config['text_colour'] = $this->config->getFrontendTextColour();
            $config['mode'] = $this->config->getFrontendMode();
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
