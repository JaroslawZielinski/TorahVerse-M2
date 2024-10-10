<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Html;

class Pager extends \Magento\Theme\Block\Html\Pager
{
    /**
     * @iheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::html/pager.phtml');
        parent::_construct();
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPageUrl()
    {
        return $this->getCollection()->getCurPage(-1);
    }

    /**
     * @inheritDoc
     */
    public function getFirstPageUrl()
    {
        return 1;
    }

    /**
     * @inheritDoc
     */
    public function getPreviousJumpUrl()
    {
        return $this->getPreviousJumpPage();
    }

    /**
     * @inheritDoc
     */
    public function getPageUrl($page): ?string
    {
        return $page > 1 ? (string)$page : null;
    }

    /**
     * @inheritDoc
     */
    public function getNextJumpUrl()
    {
        return $this->getNextJumpPage();
    }

    /**
     * @inheritDoc
     */
    public function getLastPageUrl()
    {
        return $this->getCollection()->getLastPageNumber();
    }

    /**
     * @inheritDoc
     */
    public function getNextPageUrl()
    {
        return $this->getCollection()->getCurPage(+1);
    }

    /**
     * @inheritDoc
     */
    public function getLastNum(): int
    {
        $collection = $this->getCollection();
        $firstNum = $this->getFirstNum();
        $rest = $collection->count() - $firstNum;
        $pageSize = $collection->getPageSize();
        return $firstNum + ($rest < $pageSize ? $rest : $pageSize - 1);
    }
}
