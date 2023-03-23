<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Quotes;

use ITZielArt\TorahVerse\Api\QuoteRepositoryInterface;
use ITZielArt\TorahVerse\Model\Quote;
use ITZielArt\TorahVerse\Model\QuoteFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Psr\Log\LoggerInterface;

class Save extends Action
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var QuoteFactory
     */
    private $quoteFactory;
    /**
     * @var QuoteRepositoryInterface
     */
    private $quoteRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        LoggerInterface $logger,
        QuoteFactory $quoteFactory,
        QuoteRepositoryInterface $quoteRepository,
        Context $context
    ) {
        $this->logger = $logger;
        $this->quoteFactory = $quoteFactory;
        $this->quoteRepository = $quoteRepository;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if (empty($data['quote_id'])) {
            unset($data['quote_id']);
        }
        try {
            $model = $this->quoteFactory->create();
            $model->setData($data);
            $modelData = $model->getDataModel();
            $modelData = $this->quoteRepository->save($modelData);
            $this->messageManager->addSuccessMessage(__('You saved the quote [ID: %1].', $modelData->getQuoteId()));
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());
            $this->messageManager->addErrorMessage(nl2br($e->getMessage()));
            return $resultRedirect->setPath('*/*/index');
        }
        if (!empty($this->getRequest()->getParam('back'))) {
            $quoteId = (int)$this->getRequest()->getParam('quote_id');
            return $resultRedirect->setPath('*/*/edit', ['quote_id' => $quoteId, '_current' => true]);
        }
        return $resultRedirect->setPath('*/*/index');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::quotes');
    }
}
