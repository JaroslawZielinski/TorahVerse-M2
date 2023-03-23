<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\DataProvider\Group;

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
            $item['verses'] = '';
            $item['quotes'] = '';
            return $item;
        }, $data['items']);
        return $data;
    }
}
