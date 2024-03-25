<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\SiglumPick;

use Magento\Framework\Api\Filter;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    /**
     * @var array
     */
    private $loadedData;

    /**
     * @inheritDoc
     */
    public function getData(): array
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        return [];
    }

    /**
     * @inheritDoc
     */
    public function addFilter(Filter $filter): void
    {
    }
}
