<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\DataProvider\Quote;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider;

class ListingDataProvider extends DataProvider
{
    /**
     * @inheritDoc
     */
    public function getData(): array
    {
        $data = parent::getData();
        $data['items'] = array_map(function ($item) {
            return $item;
        }, $data['items']);
        return $data;
    }
}
