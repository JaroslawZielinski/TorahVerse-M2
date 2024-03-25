<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Cms;

use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Placement;
use Magento\Framework\View\Design\Theme\ResolverInterface;
use Magento\Framework\View\Design\Theme\ThemeProviderInterface;

class HomepageWidgetInit
{
    public const DEFAULT_THEME_FULL_PATH = 'frontend/Magento/luma';

    /**
     * @var Config
     */
    private $config;

    /**
     * @var InstanceCreator
     */
    private $instanceCreator;

    /**
     * @var ThemeProviderInterface
     */
    private $themeProvider;

    /**
     * @var ResolverInterface
     */
    private $themeResolver;

    /**
     */
    public function __construct(
        Config $config,
        InstanceCreator $instanceCreator,
        ThemeProviderInterface $themeProvider,
        ResolverInterface $themeResolver
    ) {
        $this->config = $config;
        $this->instanceCreator = $instanceCreator;
        $this->themeProvider = $themeProvider;
        $this->themeResolver = $themeResolver;
    }

    private function getCurrentThemeFullName(): ?string
    {
        $themeId = $this->config->getThemeId();
        if (0 === $themeId) {
            return self::DEFAULT_THEME_FULL_PATH;
        }
        $theme = $this->themeProvider->getThemeById($themeId);
        return $theme->getFullPath();
    }

    public function executeCurrentTheme(): void
    {
        $currentTheme = $this->getCurrentThemeFullName();
        $this->execute($currentTheme);
    }

    /**
     * @inheritDoc
     */
    public function execute(string $themeName): void
    {
        $theme = $this->themeProvider->getThemeByFullPath($themeName);
        $themeId = (string)$theme->getId();
        foreach (Placement::PLACEMENTS as $code => $placement) {
            $this->instanceCreator->execute(
                sprintf('Homepage Slider - %s', $placement),
                $themeId,
                10,
                ['0'],
                ['placement' => $code],
                [
                    [
                        'page_group' => 'pages',
                        'pages' => [
                            'page_id' => 0,
                            'for' => 'all',
                            'layout_handle' => 'cms_index_index',
                            'block' => $code
                        ],
                        'page_layouts' => [
                            'layout_handle' => null
                        ]
                    ]
                ],
                'slider_homepage'
            );
        }
    }
}
