<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Groups;

use JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use Magento\Framework\Data\OptionSourceInterface;
use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;

class Verses implements OptionSourceInterface
{
    /**
     * @var array
     */
    private $attributeOptionsList;

    /**
     * @var VerseCollectionFactory
     */
    private $verseCollectionFactory;

    /**
     */
    public function __construct(VerseCollectionFactory $verseCollectionFactory)
    {
        $this->verseCollectionFactory = $verseCollectionFactory;
    }

    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        if (empty($this->attributeOptionsList)) {
            $this->attributeOptionsList = [];
            $verseCollection = $this->verseCollectionFactory
                ->create()
                ->addFieldToFilter('groups.'. GroupInterface::CODE, ['eq' => 'default'])
                ->load();
            foreach ($verseCollection as $item) {
               $this->attributeOptionsList[] = [
                   'value' => $item['verse_id'],
                   'label' => sprintf('%s (%s)', $item['name'], $item['siglum'])
               ];
            }
        }
        return $this->attributeOptionsList;
    }
}
