<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Listing\Column\Groups;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use JaroslawZielinski\TorahVerse\Ui\Component\Groups\IsAnnual\Options;

class IsAnnual extends Column
{
    private const COLUMN_NAME = 'is_annual';

    /**
     * @var Options
     */
    private $isAnnual;
    /**
     * @inheritDoc
     */
    public function __construct(
        Options $isAnnual,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->isAnnual = $isAnnual;
        parent::__construct(
            $context,
            $uiComponentFactory,
            $components,
            $data
        );
    }

    private function getIsAnnualById(int $type): string
    {
        $options = $this->isAnnual->getOptions();
        return (string)($options[$type] ?? __('unknown'));
    }

    /**
     * @inheritdoc
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_NAME])) {
                    $item[self::COLUMN_NAME] = $this->getIsAnnualById((int)$item[self::COLUMN_NAME]);
                }
            }
        }

        return $dataSource;
    }
}
