<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use JaroslawZielinski\TorahVerse\Model\Cms\HomepageWidgetInit;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddHomepageSliderWidgets implements DataPatchInterface
{
    /**
     * @var HomepageWidgetInit
     */
    private $homepageWidgetInit;

    public function __construct(HomepageWidgetInit $homepageWidgetInit)
    {
        $this->homepageWidgetInit = $homepageWidgetInit;
    }

    /**
     * @inhertiDoc
     */
    public static function getDependencies(): array
    {
        return [
            AddCustomGroups::class
        ];
    }

    /**
     * @inhertiDoc
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * @inhertiDoc
     */
    public function apply()
    {
        $this->homepageWidgetInit->executeCurrentTheme();
    }
}
