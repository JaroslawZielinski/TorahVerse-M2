<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Request\DataPersistorInterface;

abstract class Grid extends Action
{
    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @inheritDoc
     */
    public function __construct(
        DataPersistorInterface $dataPersistor,
        Context $context
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

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
