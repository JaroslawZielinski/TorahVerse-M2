<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use JaroslawZielinski\TorahVerse\Model\Quote\Install as QuoteInstall;
use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddCustomQuoteGroups implements DataPatchInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var QuoteInstall
     */
    private $quoteInstall;

    public function __construct(
        Config $config,
        QuoteInstall $quoteInstall
    ) {
        $this->config = $config;
        $this->quoteInstall = $quoteInstall;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies(): array
    {
        return [
            AddHomepageSliderWidgets::class
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     * @throws LocalizedException
     */
    public function apply()
    {
        $language = $this->config->getInternalizationLanguage();
        $this->quoteInstall->execute($language);
    }
}
