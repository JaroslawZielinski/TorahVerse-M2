<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use JaroslawZielinski\TorahVerse\Model\Quote\DictaIgnacyLoyola as DictaIgnacyLoyolaInstall;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class DictaIgnacyLoyola implements DataPatchInterface
{
    /**
     * DictaIgnacyLoyolaInstall
     */
    private $dictaIgnacyLoyolaInstall;

    /**
     */
    public function __construct(
        DictaIgnacyLoyolaInstall $dictaIgnacyLoyolaInstall
    ) {
        $this->dictaIgnacyLoyolaInstall = $dictaIgnacyLoyolaInstall;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies(): array
    {
        return [
            ReAddVerses::class
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
        $this->dictaIgnacyLoyolaInstall->execute();
    }
}
