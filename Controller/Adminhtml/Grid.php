<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

abstract class Grid extends Action
{
    /**
     * gets Title
     */
    abstract protected function getTitle(): string;

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__($this->getTitle()));
        return $resultPage;
    }
}
