<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Widget\Email\Static;

class Random extends \JaroslawZielinski\TorahVerse\Block\Widget\Static\Random
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        parent::_construct();
        $this->setTemplate('JaroslawZielinski_TorahVerse::widget/email/slider.phtml');
    }

    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    public function getConfig(): array
    {
        $config = parent::getConfig();
        $items = $config['items'] ?? [];
        $randomItemIndex = rand(0, count($items) - 1);
        $config['items'] = [$items[$randomItemIndex]];
        return $config;
    }
}
