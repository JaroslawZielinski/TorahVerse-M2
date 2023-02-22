<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\DataProvider\Verse;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider;
use ITZielArt\TorahVerse\Ui\Component\Listing\Column\Verses\Group;

class ListingDataProvider extends DataProvider
{
    /**
     * @inheritDoc
     */
    public function getData()
    {
        $data = parent::getData();
        $data['items'] = array_map(function ($item) {
            return $item;
        }, $data['items']);
        return $data;
    }
}
