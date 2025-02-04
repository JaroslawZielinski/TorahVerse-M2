<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Widget\Flat;

use JaroslawZielinski\TorahVerse\Block\Widget\Slider\Custom;

class Random extends Custom
{
    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        $config = parent::getConfig();
        $config['mode'] = 'random';
        return $config;
    }
}
