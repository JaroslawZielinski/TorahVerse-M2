<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Groups;

use JaroslawZielinski\TorahVerse\Model\ResourceModel\Quote\CollectionFactory as QuoteCollectionFactory;
use Magento\Framework\Data\OptionSourceInterface;

class Quotes implements OptionSourceInterface
{
    /**
     * @var array
     */
    private $attributeOptionsList;

    /**
     * @var QuoteCollectionFactory
     */
    private $quoteCollectionFactory;

    /**
     */
    public function __construct(QuoteCollectionFactory $quoteCollectionFactory)
    {
        $this->quoteCollectionFactory = $quoteCollectionFactory;
    }

    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        if (empty($this->attributeOptionsList)) {
            $this->attributeOptionsList = [];
            $quoteCollection = $this->quoteCollectionFactory
                ->create()
                ->addFieldToFilter('code', ['eq' => 'default'])
                ->load();
            foreach ($quoteCollection as $item) {
               $this->attributeOptionsList[] = [
                   'value' => $item['quote_id'],
                   'label' => sprintf('%s (%s)', $item['name'], $item['description'])
               ];
            }
        }
        return $this->attributeOptionsList;
    }
}
