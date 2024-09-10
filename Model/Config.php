<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model;

use JaroslawZielinski\TorahVerse\Block\Adminhtml\System\Config\Form\Field\Sliders;
use JaroslawZielinski\TorahVerse\Helper\Data;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\DesignInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;

class Config
{
    public const CONFIG_PATH_MODULE_ENABLE = 'jaroslawzielinski_torahverse/general/enable';

    public const CONFIG_PATH_MODULE_MENU_ENABLED = 'jaroslawzielinski_torahverse/general/menu_enabled';

    public const CONFIG_PATH_MODULE_SWEEP_TIME = 'jaroslawzielinski_torahverse/general/sweep_time';

    public const CONFIG_PATH_MODULE_IS_VERTICAL = 'jaroslawzielinski_torahverse/general/is_vertical_sweep_possible';

    public const CONFIG_PATH_MODULE_VERTICAL_SWEEP_TIME = 'jaroslawzielinski_torahverse/general/vertical_sweep_time';

    public const CONFIG_PATH_MODULE_IS_GROUP_COLOUR = 'jaroslawzielinski_torahverse/general/is_group_colours_enable';

    public const CONFIG_PATH_MODULE_VERSE_TEMPLATE = 'jaroslawzielinski_torahverse/general/verse_template';

    public const CONFIG_PATH_MODULE_GROUP_COLOURS_VERSE_TEMPLATE
        = 'jaroslawzielinski_torahverse/general/group_colours_verse_template';

    public const CONFIG_PATH_MODULE_QUOTE_TEMPLATE = 'jaroslawzielinski_torahverse/general/quote_template';

    public const CONFIG_PATH_MODULE_GROUP_COLOURS_QUOTE_TEMPLATE
        = 'jaroslawzielinski_torahverse/general/group_colours_quote_template';

    public const CONFIG_PATH_MODULE_ANNUAL_TEMPLATE = 'jaroslawzielinski_torahverse/general/annual_template';

    public const CONFIG_PATH_MODULE_GROUP_COLOURS_ANNUAL_TEMPLATE
        = 'jaroslawzielinski_torahverse/general/group_colours_annual_template';

    public const CONFIG_PATH_MODULE_VERSES_ORDERED = 'jaroslawzielinski_torahverse/general/verses_ordered';

    public const CONFIG_PATH_MODULE_TEXT_COLOUR = 'jaroslawzielinski_torahverse/general/text_colour';

    public const CONFIG_PATH_MODULE_BACKGROUND_HOVER_COLOUR
        = 'jaroslawzielinski_torahverse/general/background_hover_colour';

    public const CONFIG_PATH_MODULE_MODE = 'jaroslawzielinski_torahverse/general/mode';

    public const CONFIG_PATH_MODULE_CONTENT_SHOWN_ROWS = 'jaroslawzielinski_torahverse/general/content_shown_rows';

    public const CONFIG_PATH_MODULE_CUSTOM_STYLES = 'jaroslawzielinski_torahverse/general/custom_styles';

    public const CONFIG_PATH_FRONTEND_ENABLE = 'jaroslawzielinski_torahverse/frontend_slider/enable';

    public const CONFIG_PATH_FRONTEND_OVERRIDE = 'jaroslawzielinski_torahverse/frontend_slider/override';

    public const CONFIG_PATH_FRONTEND_SWEEP_TIME = 'jaroslawzielinski_torahverse/frontend_slider/sweep_time';

    public const CONFIG_PATH_FRONTEND_IS_VERTICAL
        = 'jaroslawzielinski_torahverse/frontend_slider/is_vertical_sweep_possible';

    public const CONFIG_PATH_FRONTEND_VERTICAL_SWEEP_TIME
        = 'jaroslawzielinski_torahverse/frontend_slider/vertical_sweep_time';

    public const CONFIG_PATH_FRONTEND_IS_GROUP_COLOUR
        = 'jaroslawzielinski_torahverse/frontend_slider/is_group_colours_enable';

    public const CONFIG_PATH_FRONTEND_VERSES_ORDERED = 'jaroslawzielinski_torahverse/frontend_slider/verses_ordered';

    public const CONFIG_PATH_FRONTEND_TEXT_COLOUR = 'jaroslawzielinski_torahverse/frontend_slider/text_colour';

    public const CONFIG_PATH_FRONTEND_MODE = 'jaroslawzielinski_torahverse/frontend_slider/mode';

    public const CONFIG_PATH_FRONTEND_PLACEMENT = 'jaroslawzielinski_torahverse/frontend_slider/placement';

    public const CONFIG_PATH_FRONTEND_SLIDER = 'jaroslawzielinski_torahverse/frontend_slider/slider';

    public const CONFIG_PATH_BACKEND_ENABLE = 'jaroslawzielinski_torahverse/backend_slider/enable';

    public const CONFIG_PATH_BACKEND_OVERRIDE = 'jaroslawzielinski_torahverse/backend_slider/override';

    public const CONFIG_PATH_BACKEND_SWEEP_TIME = 'jaroslawzielinski_torahverse/backend_slider/sweep_time';

    public const CONFIG_PATH_BACKEND_IS_VERTICAL
        = 'jaroslawzielinski_torahverse/backend_slider/is_vertical_sweep_possible';

    public const CONFIG_PATH_BACKEND_VERTICAL_SWEEP_TIME
        = 'jaroslawzielinski_torahverse/backend_slider/vertical_sweep_time';

    public const CONFIG_PATH_BACKEND_IS_GROUP_COLOUR
        = 'jaroslawzielinski_torahverse/backend_slider/is_group_colours_enable';

    public const CONFIG_PATH_BACKEND_VERSES_ORDERED = 'jaroslawzielinski_torahverse/backend_slider/verses_ordered';

    public const CONFIG_PATH_BACKEND_TEXT_COLOUR = 'jaroslawzielinski_torahverse/backend_slider/text_colour';

    public const CONFIG_PATH_BACKEND_MODE = 'jaroslawzielinski_torahverse/backend_slider/mode';

    public const CONFIG_PATH_BACKEND_SLIDER = 'jaroslawzielinski_torahverse/backend_slider/slider';

    public const CONFIG_PATH_CUSTOM_ENABLE = 'jaroslawzielinski_torahverse/custom_sliders/enable';

    public const CONFIG_PATH_CUSTOM_OVERRIDE = 'jaroslawzielinski_torahverse/custom_sliders/override';

    public const CONFIG_PATH_CUSTOM_SWEEP_TIME = 'jaroslawzielinski_torahverse/custom_sliders/sweep_time';

    public const CONFIG_PATH_CUSTOM_IS_VERTICAL
        = 'jaroslawzielinski_torahverse/custom_sliders/is_vertical_sweep_possible';

    public const CONFIG_PATH_CUSTOM_VERTICAL_SWEEP_TIME
        = 'jaroslawzielinski_torahverse/custom_sliders/vertical_sweep_time';

    public const CONFIG_PATH_CUSTOM_IS_GROUP_COLOUR
        = 'jaroslawzielinski_torahverse/custom_sliders/is_group_colours_enable';

    public const CONFIG_PATH_CUSTOM_VERSES_ORDERED = 'jaroslawzielinski_torahverse/custom_sliders/verses_ordered';

    public const CONFIG_PATH_CUSTOM_TEXT_COLOUR = 'jaroslawzielinski_torahverse/custom_sliders/text_colour';

    public const CONFIG_PATH_CUSTOM_MODE = 'jaroslawzielinski_torahverse/custom_sliders/mode';

    public const CONFIG_PATH_CUSTOM_SLIDERS = 'jaroslawzielinski_torahverse/custom_sliders/sliders';

    public const CONFIG_PATH_SETTINGS_CACHE_ENABLE = 'jaroslawzielinski_torah/settings/cache_enable';

    public const CONFIG_PATH_INTERNALIZATION_LANGUAGE = 'jaroslawzielinski_torah/internalization/language';

    public const CONFIG_PATH_TORAHINPUT_DIVISION = 'jaroslawzielinski_torah/torah_input/division';

    public const CONFIG_PATH_TORAHINPUT_BIBLETOOLSENABLED = 'jaroslawzielinski_torah/torah_input/bibletools_enabled';

    public const CONFIG_PATH_TORAHINPUT_CASE_SENSITIVE = 'jaroslawzielinski_torah/torah_input/case_sensitive';

    public const CONFIG_PATH_TORAHINPUT_DIVISION_PARTS = 'jaroslawzielinski_torah/torah_input/division_parts';

    public const CONFIG_PATH_TORAHINPUT_RESULTS_PER_PAGE = 'jaroslawzielinski_torah/torah_input/results_per_page';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var JsonSerializer
     */
    private $jsonSerializer;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        JsonSerializer $jsonSerializer
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->jsonSerializer = $jsonSerializer;
    }

    public function isModuleEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_MODULE_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    public function isModuleMenuEnabled(): bool
    {
        $isEnabled = $this->isModuleEnable();
        return $isEnabled && $this->scopeConfig
                ->isSetFlag(self::CONFIG_PATH_MODULE_MENU_ENABLED, ScopeInterface::SCOPE_STORE);
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

    public function getModuleVerticalSweepTime(): int
    {
        return (int)(
            $this->scopeConfig
                ->getValue(self::CONFIG_PATH_MODULE_VERTICAL_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }
    public function isModuleGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_MODULE_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }

    public function getModuleVerseTemplate(): ?string
    {
        $verseTemplate = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_VERSE_TEMPLATE, ScopeInterface::SCOPE_STORE);
        return empty($verseTemplate) ? null : (string)$verseTemplate;
    }

    public function getModuleGroupColoursVerseTemplate(): ?string
    {
        $groupColoursVerseTemplate = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_GROUP_COLOURS_VERSE_TEMPLATE, ScopeInterface::SCOPE_STORE);
        return empty($groupColoursVerseTemplate) ? null : (string)$groupColoursVerseTemplate;
    }

    public function getModuleQuoteTemplate(): ?string
    {
        $quoteTemplate = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_QUOTE_TEMPLATE, ScopeInterface::SCOPE_STORE);
        return empty($quoteTemplate) ? null : (string)$quoteTemplate;
    }

    public function getModuleGroupColoursQuoteTemplate(): ?string
    {
        $groupColoursQuoteTemplate = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_GROUP_COLOURS_QUOTE_TEMPLATE, ScopeInterface::SCOPE_STORE);
        return empty($groupColoursQuoteTemplate) ? null : (string)$groupColoursQuoteTemplate;
    }

    public function getModuleAnnualTemplate(): ?string
    {
        $annualTemplate = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_ANNUAL_TEMPLATE, ScopeInterface::SCOPE_STORE);
        return empty($annualTemplate) ? null : (string)$annualTemplate;
    }

    public function getModuleGroupColoursAnnualTemplate(): ?string
    {
        $groupColoursAnnualTemplate = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_GROUP_COLOURS_ANNUAL_TEMPLATE, ScopeInterface::SCOPE_STORE);
        return empty($groupColoursAnnualTemplate) ? null : (string)$groupColoursAnnualTemplate;
    }

    public function isModuleVersesOrdered(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_MODULE_VERSES_ORDERED, ScopeInterface::SCOPE_STORE);
    }

    public function getModuleTextColour(): ?string
    {
        $textColour = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_TEXT_COLOUR, ScopeInterface::SCOPE_STORE);
        return empty($textColour) ? null : (string)$textColour;
    }

    public function getModuleBackgroundHoverColour(): ?string
    {
        $backgroundHoverColour = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_BACKGROUND_HOVER_COLOUR, ScopeInterface::SCOPE_STORE);
        return empty($backgroundHoverColour) ? null : (string)$backgroundHoverColour;
    }

    public function getModuleMode(): ?string
    {
        $mode = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_MODE, ScopeInterface::SCOPE_STORE);
        return empty($mode) ? null : (string)$mode;
    }

    public function getModuleContentShownRows(): int
    {
        return (int)(
            $this->scopeConfig
                ->getValue(self::CONFIG_PATH_MODULE_CONTENT_SHOWN_ROWS, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function getModuleCustomStyles(): ?string
    {
        $customStyles = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_MODULE_CUSTOM_STYLES, ScopeInterface::SCOPE_STORE);
        return empty($customStyles) ? null : (string)$customStyles;
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

    public function getFrontendVerticalSweepTime(): int
    {
        return (int)(
            $this->scopeConfig
                ->getValue(self::CONFIG_PATH_FRONTEND_VERTICAL_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function isFrontendGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_FRONTEND_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }

    public function isFrontendVersesOrdered(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_FRONTEND_VERSES_ORDERED, ScopeInterface::SCOPE_STORE);
    }

    public function getFrontendTextColour(): ?string
    {
        $textColour = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_FRONTEND_TEXT_COLOUR, ScopeInterface::SCOPE_STORE);
        return empty($textColour) ? null : (string)$textColour;
    }

    public function getFrontendMode(): ?string
    {
        $mode = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_FRONTEND_MODE, ScopeInterface::SCOPE_STORE);
        return empty($mode) ? null : (string)$mode;
    }

    public function getFrontendPlacement(): array
    {
        $placementString = (string)$this->scopeConfig
            ->getValue(self::CONFIG_PATH_FRONTEND_PLACEMENT, ScopeInterface::SCOPE_STORE);
        if (empty($placementString)) {
            return [];
        }
        return explode(',', $placementString);
    }

    public function getFrontendSlider(): array
    {
        $sliderString = (string)$this->scopeConfig
            ->getValue(self::CONFIG_PATH_FRONTEND_SLIDER, ScopeInterface::SCOPE_STORE);
        if (empty($sliderString)) {
            return [];
        }
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

    public function getBackendVerticalSweepTime(): int
    {
        return (int)(
            $this->scopeConfig
                ->getValue(self::CONFIG_PATH_BACKEND_VERTICAL_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function isBackendGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_BACKEND_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }

    public function isBackendVersesOrdered(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_BACKEND_VERSES_ORDERED, ScopeInterface::SCOPE_STORE);
    }

    public function getBackendTextColour(): ?string
    {
        $textColour = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_BACKEND_TEXT_COLOUR, ScopeInterface::SCOPE_STORE);
        return empty($textColour) ? null : (string)$textColour;
    }

    public function getBackendMode(): ?string
    {
        $mode = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_BACKEND_MODE, ScopeInterface::SCOPE_STORE);
        return empty($mode) ? null : (string)$mode;
    }

    public function getBackendSlider(): array
    {
        $sliderString = $this->scopeConfig->getValue(self::CONFIG_PATH_BACKEND_SLIDER, ScopeInterface::SCOPE_STORE);
        if (empty($sliderString)) {
            return [];
        }
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

    public function getCustomVerticalSweepTime(): int
    {
        return (int)(
            $this->scopeConfig
                ->getValue(self::CONFIG_PATH_CUSTOM_VERTICAL_SWEEP_TIME, ScopeInterface::SCOPE_STORE) ?? '0'
        );
    }

    public function isCustomGroupColour(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_CUSTOM_IS_GROUP_COLOUR, ScopeInterface::SCOPE_STORE);
    }

    public function isCustomVersesOrdered(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_CUSTOM_VERSES_ORDERED, ScopeInterface::SCOPE_STORE);
    }

    public function getCustomTextColour(): ?string
    {
        $textColour = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_CUSTOM_TEXT_COLOUR, ScopeInterface::SCOPE_STORE);
        return empty($textColour) ? null : (string)$textColour;
    }

    public function getCustomMode(): ?string
    {
        $mode = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_CUSTOM_MODE, ScopeInterface::SCOPE_STORE);
        return empty($mode) ? null : (string)$mode;
    }

    public function getCustomSliders(): array
    {
        $serializedCustomSliders =
            $this->scopeConfig->getValue(self::CONFIG_PATH_CUSTOM_SLIDERS) ?? '{}';
        return $this->jsonSerializer->unserialize($serializedCustomSliders);
    }

    public function getCustomSlider(string $code): array
    {
        $sliders = $this->getCustomSliders();
        $result = Data::assocArrayKeySearch($code, $sliders);
        if (empty($result)) {
            return [];
        }
        return $sliders[$result][Sliders::SLIDER];
    }

    public function getThemeId(): int
    {
        return (int)($this->scopeConfig
            ->getValue(DesignInterface::XML_PATH_THEME_ID, ScopeInterface::SCOPE_STORE) ?? '');
    }

    public function isTorahCacheEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_SETTINGS_CACHE_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    public function getInternalizationLanguage(): string
    {
        return (string)$this->scopeConfig
            ->getValue(self::CONFIG_PATH_INTERNALIZATION_LANGUAGE, ScopeInterface::SCOPE_STORE);
    }

    public function getTorahInputDivision(): string
    {
        return (string)$this->scopeConfig
            ->getValue(self::CONFIG_PATH_TORAHINPUT_DIVISION, ScopeInterface::SCOPE_STORE);
    }

    public function isTorahInputBibleToolsEnabled(): bool
    {
        return $this->scopeConfig
            ->isSetFlag(self::CONFIG_PATH_TORAHINPUT_BIBLETOOLSENABLED, ScopeInterface::SCOPE_STORE);
    }

    public function isTorahInputCaseSensitive(): bool
    {
        return $this->scopeConfig
            ->isSetFlag(self::CONFIG_PATH_TORAHINPUT_CASE_SENSITIVE, ScopeInterface::SCOPE_STORE);
    }

    public function getTorahInputDivisionParts(): array
    {
        $divisionParts = $this->scopeConfig
            ->getValue(self::CONFIG_PATH_TORAHINPUT_DIVISION_PARTS, ScopeInterface::SCOPE_STORE);
        return !empty($divisionParts) ? explode(',', (string)$divisionParts) : [];
    }

    public function getTorahInputResultsPerPage(): string
    {
        return (string)$this->scopeConfig
            ->getValue(self::CONFIG_PATH_TORAHINPUT_RESULTS_PER_PAGE, ScopeInterface::SCOPE_STORE);
    }
}
