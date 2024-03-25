<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use JaroslawZielinski\TorahVerse\Model\Verse\Install as VerseInstall;
use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class ReAddVerses implements DataPatchInterface
{
    /**
     * Config
     */
    private $config;

    /**
     * VerseInstall
     */
    private $verseInstall;

    /**
     */
    public function __construct(
        Config $config,
        VerseInstall $verseInstall
    ) {
        $this->config = $config;
        $this->verseInstall = $verseInstall;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies(): array
    {
        return [
            AddCustomQuoteGroups::class
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
        $this->verseInstall->execute($language);
    }
}
