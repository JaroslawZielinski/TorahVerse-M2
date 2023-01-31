<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Siglum;

use JaroslawZielinski\Torah\Translations\Resources;
use Magento\Backend\Block\Template;

class Info extends Template
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('ITZielArt_TorahVerse::siglum/info.phtml');
        parent::_construct();
    }

    public function getBooksInfo(string $part = 'Tanakh'): array
    {
        $results = [];
        array_filter(Resources::TORAH_BOOKS_EXTENDED[$part], function ($value, $key) use (&$results) {
            $results[$key] = $value['full'];
        }, ARRAY_FILTER_USE_BOTH);
        return $results;
    }

    private function pickBooks(array $rows, int $key, string $part): array
    {
        $books = $this->getBooksInfo($part);
        $count = 0;
        foreach ($books as $code => $book) {
            $rows[$count][$key] = [$code => $book];
            $count++;
        }
        return $rows;
    }

    public function getBooksRows(): array
    {
        $rows = [];
        foreach ($this->getTorahParts() as $key => $part) {
            $rows = $this->pickBooks($rows, $key, $part);
        }
        return $rows;
    }

    public function getTorahParts(): array
    {
        return array_keys(Resources::TORAH_BOOKS_EXTENDED);
    }
}
