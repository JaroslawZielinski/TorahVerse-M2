<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use JaroslawZielinski\TorahVerse\Model\Verse;
use JaroslawZielinski\TorahVerse\Model\ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'verse_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            Verse::class,
            ResourceModel\Verse::class
        );
    }

    /**
     * @inheritDoc
     * @see https://magento.stackexchange.com/questions/141723/magento-2-grid-uicomponent-include-a-table-alias-in-a-column-filter#answer-148959
     */
    protected function _initSelect()
    {
        parent::_initSelect();
        $this->getSelect()
            ->joinLeft(
                ['groups' => $this->getTable('torahverse_groups')],
                'main_table.group_id = groups.group_id',
                [
                    'groupName' => 'groups.name',
                    'colour_value',
                    'groupCode' => 'groups.code',
                    'code' => 'main_table.code'
                ]
        );
        $this->addFilterToMap('groupName', 'groups.name');
        $this->addFilterToMap('groupCode', 'groups.code');
        $this->addFilterToMap('name', 'main_table.name');
        $this->addFilterToMap('code', 'main_table.code');
    }
}
