<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Verses;

use JaroslawZielinski\Torah\Translations\Resources;
use Magento\Framework\Option\ArrayInterface;

class Translation implements ArrayInterface
{
    /**
     * @inheritDoc
     */
    public function toOptionArray(): ?array
    {
        $options[] = [
            'value' => null,
            'label' => __('--Please Select--')
        ];
        array_filter(Resources::TORAH_TRANSLATIONS, function ($item, $key) use(&$options) {
            $options[] = ['value' => $key, 'label' => __(str_replace(['&apos;'], ['\''], $item))];
            return $item;
        }, ARRAY_FILTER_USE_BOTH);
        return $options;
    }
}
