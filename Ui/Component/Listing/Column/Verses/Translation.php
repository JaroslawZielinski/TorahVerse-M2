<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\Listing\Column\Verses;

use JaroslawZielinski\Torah\Translations\Resources;
use Magento\Framework\Api\AttributeInterface;
use Magento\Ui\Component\Listing\Columns\Column;

class Translation extends Column
{
    public const COLUMN_NAME = 'translation';

    /**
     * @inheritdoc
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_NAME])) {
                    /** @var AttributeInterface $groupCustomerAttribute */
                    $item[self::COLUMN_NAME] = sprintf(
                        '<strong>%s</strong> (%s)',
                        $item[self::COLUMN_NAME],
                        $this->getTranslationByCode($item[self::COLUMN_NAME])
                    );
                }
            }
        }

        return $dataSource;
    }

    private function getTranslationByCode(string $code): string
    {
        return Resources::TORAH_TRANSLATIONS[$code] ?? '-';
    }
}
