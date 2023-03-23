<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Quotes;

use ITZielArt\TorahVerse\Api\QuoteRepositoryInterface;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Backend\App\Action;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class Delete extends Action
{
    /**
     * @var QuoteRepositoryInterface
     */
    private $quoteRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        QuoteRepositoryInterface $quoteRepository,
        Context $context
    ) {
        $this->quoteRepository = $quoteRepository;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $quoteId = (int)$this->getRequest()->getParam('quote_id');
        if (!empty($quoteId)) {
            try {
                $this->quoteRepository->deleteById($quoteId);
            } catch (NoSuchEntityException|LocalizedException $e) {
                $this->messageManager->addErrorMessage(__('This quote no longer exists.'));
                /** @var Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->messageManager->addSuccessMessage(__('The quote succesfully deleted [ID: %1].', $quoteId));
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::quotes');
    }
}
