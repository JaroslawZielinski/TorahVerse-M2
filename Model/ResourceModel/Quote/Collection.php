<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel\Quote;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ITZielArt\TorahVerse\Model\Quote;
use ITZielArt\TorahVerse\Model\ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'quote_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            Quote::class,
            ResourceModel\Quote::class
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
                ['groupName' => 'groups.name', 'colour_value', 'code']
            );
        $this->addFilterToMap('groupName', 'groups.name');
        $this->addFilterToMap('name', 'main_table.name');
    }
}
