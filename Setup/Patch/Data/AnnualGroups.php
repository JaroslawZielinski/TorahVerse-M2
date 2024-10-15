<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use JaroslawZielinski\TorahVerse\Model\Group\Annual as AnnualGroupInstall;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AnnualGroups implements DataPatchInterface
{
    /**
     * AnnualGroupInstall
     */
    private $annualGroupInstall;

    /**
     */
    public function __construct(
        AnnualGroupInstall $annualGroupInstall
    ) {
        $this->annualGroupInstall = $annualGroupInstall;
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
        $this->annualGroupInstall->execute();
    }
}
