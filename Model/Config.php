<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    public const CONFIG_PATH_MODULE_ENABLE = 'itzielart_torahverse/general/enable';
    public const CONFIG_PATH_MODULE_SWEEP_TIME = 'itzielart_torahverse/general/sweep_time';
    public const CONFIG_PATH_MODULE_IS_VERTICAL = 'itzielart_torahverse/general/is_vertical_sweep_possible';
    public const CONFIG_PATH_MODULE_IS_GROUP_COLOUR = 'itzielart_torahverse/general/is_group_colours_enable';
    public const CONFIG_PATH_FRONTEND_ENABLE = 'itzielart_torahverse/frontend_slider/enable';
    public const CONFIG_PATH_FRONTEND_OVERRIDE = 'itzielart_torahverse/frontend_slider/override';
    public const CONFIG_PATH_FRONTEND_SWEEP_TIME = 'itzielart_torahverse/frontend_slider/sweep_time';
    public const CONFIG_PATH_FRONTEND_IS_VERTICAL = 'itzielart_torahverse/frontend_slider/is_vertical_sweep_possible';
    public const CONFIG_PATH_FRONTEND_IS_GROUP_COLOUR = 'itzielart_torahverse/frontend_slider/is_group_colours_enable';
    public const CONFIG_PATH_FRONTEND_PLACEMENT = 'itzielart_torahverse/frontend_slider/placement';
    public const CONFIG_PATH_FRONTEND_SLIDER = 'itzielart_torahverse/frontend_slider/slider';
    public const CONFIG_PATH_BACKEND_ENABLE = 'itzielart_torahverse/backend_slider/enable';
    public const CONFIG_PATH_BACKEND_OVERRIDE = 'itzielart_torahverse/backend_slider/override';
    public const CONFIG_PATH_BACKEND_SWEEP_TIME = 'itzielart_torahverse/backend_slider/sweep_time';
    public const CONFIG_PATH_BACKEND_IS_VERTICAL = 'itzielart_torahverse/backend_slider/is_vertical_sweep_possible';
    public const CONFIG_PATH_BACKEND_IS_GROUP_COLOUR = 'itzielart_torahverse/backend_slider/is_group_colours_enable';
    public const CONFIG_PATH_BACKEND_SLIDER = 'itzielart_torahverse/backend_slider/slider';
    public const CONFIG_PATH_CUSTOM_ENABLE = 'itzielart_torahverse/custom_sliders/enable';
    public const CONFIG_PATH_CUSTOM_OVERRIDE = 'itzielart_torahverse/custom_sliders/override';
    public const CONFIG_PATH_CUSTOM_SWEEP_TIME = 'itzielart_torahverse/custom_sliders/sweep_time';
    public const CONFIG_PATH_CUSTOM_IS_VERTICAL = 'itzielart_torahverse/custom_sliders/is_vertical_sweep_possible';
    public const CONFIG_PATH_CUSTOM_IS_GROUP_COLOUR = 'itzielart_torahverse/custom_sliders/is_group_colours_enable';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isModuleEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_MODULE_ENABLE);
    }

    public function getModuleSweepTime(): int
    {
        return (int)(
            $this->scopeConfig->getValue(self::CONFIG_PATH_MODULE_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function isModuleVertical(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_MODULE_IS_VERTICAL, ScopeInterface::SCOPE_STORE);
    }

    public function isModuleGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_MODULE_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }

    public function isFrontendEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_FRONTEND_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    public function isFrontendOverride(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_FRONTEND_OVERRIDE, ScopeInterface::SCOPE_STORE);
    }

    public function getFrontendSweepTime(): int
    {
        return (int)(
            $this->scopeConfig->getValue(self::CONFIG_PATH_FRONTEND_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function isFrontendVertical(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_FRONTEND_IS_VERTICAL, ScopeInterface::SCOPE_STORE);
    }

    public function isFrontendGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_FRONTEND_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }

    public function getFrontendPlacement(): string
    {
        return (string)$this->scopeConfig->getValue(self::CONFIG_PATH_FRONTEND_PLACEMENT, ScopeInterface::SCOPE_STORE);
    }

    public function getFrontendSlider(): array
    {
        $sliderString = $this->scopeConfig->getValue(self::CONFIG_PATH_FRONTEND_SLIDER, ScopeInterface::SCOPE_STORE);
        return explode(',', $sliderString);
    }

    public function isBackendEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_BACKEND_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    public function isBackendOverride(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_BACKEND_OVERRIDE, ScopeInterface::SCOPE_STORE);
    }

    public function getBackendSweepTime(): int
    {
        return (int)(
            $this->scopeConfig->getValue(self::CONFIG_PATH_BACKEND_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function isBackendVertical(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_BACKEND_IS_VERTICAL, ScopeInterface::SCOPE_STORE);
    }

    public function isBackendGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_BACKEND_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }

    public function getBackendSlider(): array
    {
        $sliderString = $this->scopeConfig->getValue(self::CONFIG_PATH_BACKEND_SLIDER, ScopeInterface::SCOPE_STORE);
        return explode(',', $sliderString);
    }

    public function isCustomEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_CUSTOM_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    public function isCustomOverride(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_CUSTOM_OVERRIDE, ScopeInterface::SCOPE_STORE);
    }

    public function getCustomSweepTime(): int
    {
        return (int)(
            $this->scopeConfig->getValue(self::CONFIG_PATH_CUSTOM_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function isCustomVertical(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_CUSTOM_IS_VERTICAL, ScopeInterface::SCOPE_STORE);
    }

    public function isCustomGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_CUSTOM_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }
}
