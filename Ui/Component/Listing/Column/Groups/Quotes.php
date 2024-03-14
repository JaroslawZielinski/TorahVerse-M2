<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Listing\Column\Groups;

use JaroslawZielinski\TorahVerse\Api\Data\QuoteInterface;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Quote\CollectionFactory;
use JaroslawZielinski\TorahVerse\Model\Quote;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class Quotes extends Column
{
    public const COLUMN_GROUP_QUOTES = 'quotes';

    /**
     * @var CollectionFactory
     */
    private $quoteCollectionFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        CollectionFactory $quoteCollectionFactory,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->quoteCollectionFactory = $quoteCollectionFactory;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }


    /**
     * @inheritdoc
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_GROUP_QUOTES])) {
                    $item[self::COLUMN_GROUP_QUOTES] = $this->getQuotesHtml($item);
                }
            }
        }

        return $dataSource;
    }

    private function getQuotesHtml(array $item): string
    {
        $collection = $this->quoteCollectionFactory
            ->create()
            ->addFieldToFilter('main_table.' . QuoteInterface::GROUP_ID, (int)$item['group_id'])
            ->load();
        $count = 0;
        $spans = [];
        /** @var Quote $verse */
        foreach ($collection as $quote) {
            $item = sprintf(
                '<span title="%s (%s)">%s</span>',
                $quote['name'],
                !empty($quote['description']) ? $quote['description'] : $quote['author'],
                $quote['quote_id']
            );
            $spans[$count++] = $item;
        }
        return $count > 0 ? sprintf('%s item(s) [IDS: %s]', $count, implode(', ', $spans)) : 'none';
    }
}
