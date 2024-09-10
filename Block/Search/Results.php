<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Search;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Data\Collection;
use JaroslawZielinski\Torah\Bible\Service\Online\Client;

/**
 * @see https://magento.stackexchange.com/questions/177465/why-is-setpagesize-and-setcurpage-functions-not-working-with-the-collecti#answer-315902
 *
 * @method getCurPage(): int
 * @method setCurPage(int $curPage): self
 * @method getPageSize(): int
 * @method setPageSize(int $pageSize): self
 * @method getCollection(): Collection
 * @method setCollection(Collection $collection): self
 * @method getSearch(): string
 * @method setSearch(string $search): self
 * @method getSearch2(): string
 * @method setSearch2(string $search2): self
 */
class Results extends Template
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::search/results.phtml');
        parent::_construct();
    }

    /**
     */
    public function getFilteredCollection(): Collection
    {
        $page = $this->getCurPage();
        $pageSize = $this->getPageSize();
        /** @var Collection $collection */
        $collection = clone $this->getCollection();
        $collection->setPageSize($pageSize);
        if ($page > $collection->getLastPageNumber()) {
            $page = $collection->getLastPageNumber();
        }
        $currentPage = $page;
        $firstItem = (($currentPage - 1) * $pageSize + 1);
        $lastItem = $firstItem + ($pageSize - 1);
        $iterator = 1;
        foreach ($collection as $key => $item) {
            $pos = $iterator;
            $iterator++;
            if ($pos >= $firstItem && $pos <= $lastItem) {
                continue;
            }
            $collection->removeItemByKey($key);
        }
        return $collection;
    }

    /**
     */
    public function getServiceUrl(): string
    {
        return Client::getBaseUrl();
    }

    /**
     * @see https://amazingalgorithms.com/snippets/php/highlight-a-text-string-in-html/
     */
    public function highlightText(string $text, ?string $search, string $class = 'first')
    {
        if (empty($search)) {
            return $text;
        }
        // Escape the search term for use in a regular expression
        $escapedSearch = preg_quote($search, '/');
        // Perform a case-insensitive search for the search term in the text
        $matches = preg_match_all("/($escapedSearch)/i", $text, $matches);
        // If the search term is found in the text, wrap it in highlight tags
        if ($matches) {
            $text = preg_replace("/($escapedSearch)/i", '<mark class="' . $class . '">$1</mark>', $text);
        }
        // Return the highlighted text
        return $text;
    }
}
