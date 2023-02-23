<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\Listing\Column\Groups;

use ITZielArt\TorahVerse\Api\Data\VerseInterface;
use ITZielArt\TorahVerse\Model\ResourceModel\Verse\CollectionFactory;
use ITZielArt\TorahVerse\Model\Verse;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class Verses extends Column
{
    public const COLUMN_GROUP_VERSES = 'verses';

    /**
     * @var CollectionFactory
     */
    private $verseCollectionFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        CollectionFactory $verseCollectionFactory,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->verseCollectionFactory = $verseCollectionFactory;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }


    /**
     * @inheritdoc
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_GROUP_VERSES])) {
                    $item[self::COLUMN_GROUP_VERSES] = $this->getVersesHtml($item);
                }
            }
        }

        return $dataSource;
    }

    private function getVersesHtml(array $item): string
    {
        $collection = $this->verseCollectionFactory
            ->create()
            ->addFieldToFilter('main_table.' . VerseInterface::GROUP_ID, (int)$item['group_id'])
            ->load();
        $count = 0;
        $spans = [];
        /** @var Verse $verse */
        foreach ($collection as $verse) {
            $item = sprintf(
                '<span title="%s (%s)">%s</span>',
                $verse['name'],
                $verse['description'],
                $verse['verse_id']
            );
            $spans[$count++] = $item;
        }
        return $count > 0 ? sprintf('%s item(s) [IDS: %s]', $count, implode(', ', $spans)) : 'none';
    }
}
