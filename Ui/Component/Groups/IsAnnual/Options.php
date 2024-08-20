<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Groups\IsAnnual;

class Options extends \JaroslawZielinski\TorahVerse\Ui\Component\Groups\Options
{
    public const DRY_RUN_NO = 0;

    public const DRY_RUN_YES = 1;

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [
            self::DRY_RUN_NO => __('No'),
            self::DRY_RUN_YES => __('Yes')
        ];
    }
}
