<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\Listing\Column\Verses;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Helper\Data;
use Magento\Framework\Api\AttributeInterface;
use Magento\Ui\Component\Listing\Columns\Column;

class Group extends Column
{
    public const COLUMN_GROUP_NAME = 'groupName';
    public const COLUMN_GROUP_COLOUR_VALUE = 'colour_value';

    /**
     * @inheritdoc
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_GROUP_NAME])) {
                    /** @var AttributeInterface $groupCustomerAttribute */
                    $item[self::COLUMN_GROUP_NAME] = $this->getGroupHtml(
                        $item[self::COLUMN_GROUP_COLOUR_VALUE],
                        $item[self::COLUMN_GROUP_NAME]
                    );
                }
            }
        }

        return $dataSource;
    }

    protected function getGroupHtml(string $colourValue, string $groupName): string
    {
        if (GroupInterface::NO_COLOUR === $colourValue) {
            $colourValue = '#FFFFFF';
        }
        $contrastColourValue = Data::getContrastColor($colourValue);
        return sprintf(
            '<div class="group-grid" style="color: %s; background-color: %s;text-align: center;">%s</div>',
            $contrastColourValue,
            $colourValue,
            $groupName
        );
    }
}
