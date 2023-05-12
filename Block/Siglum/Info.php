<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Siglum;

use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Info extends Template
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        Context $context, array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::siglum/info.phtml');
        parent::_construct();
    }

    public function getBooksInfo(string $part = 'Tanakh'): array
    {
        $results = [];
        $language = $this->config->getInternalizationLanguage();
        array_filter(Resources::TORAH_BOOKS_EXTENDED[$part], function ($value, $key) use (&$results, $language) {
            $results[$key] = $value[$language];
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
