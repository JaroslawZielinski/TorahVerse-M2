<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\Listing\Column\Groups;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Helper\Data;
use Magento\Framework\Api\AttributeInterface;
use Magento\Ui\Component\Listing\Columns\Column;

class ColourValue extends Column
{
    public const COLUMN_GROUP_NAME = 'colour_value';

    /**
     * @inheritdoc
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_GROUP_NAME])) {
                    /** @var AttributeInterface $groupCustomerAttribute */
                    $item[self::COLUMN_GROUP_NAME] = $this->getColourValueHtml($item[self::COLUMN_GROUP_NAME]);
                }
            }
        }

        return $dataSource;
    }

    private function getColourValueHtml(string $colourValue): string
    {
        if (GroupInterface::NO_COLOUR === $colourValue) {
            $colourValue = '#FFFFFF';
        }
        $contrastColourValue = Data::getContrastColor($colourValue);
        return sprintf(
            '<div class="group-grid" style="color: %s; background-color: %s;text-align: center;">%s</div>',
            $contrastColourValue,
            $colourValue,
            $colourValue
        );
    }
}
