<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\Quotes;

use JaroslawZielinski\TorahVerse\Api\QuoteRepositoryInterface;
use JaroslawZielinski\TorahVerse\Controller\Adminhtml\Grid;
use JaroslawZielinski\TorahVerse\Model\Data\Quote as QuoteData;
use JaroslawZielinski\TorahVerse\Model\QuoteFactory;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;

class Edit extends Grid implements HttpGetActionInterface
{
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
        QuoteFactory $quoteFactory,
        QuoteRepositoryInterface $quoteRepository,
        DataPersistorInterface $dataPersistor,
        Context $context
    ) {
        $this->quoteFactory = $quoteFactory;
        $this->quoteRepository = $quoteRepository;
        parent::__construct($dataPersistor, $context);
    }

    /**
     * {@inheritDoc}
     * @throws LocalizedException
     */
    public function execute()
    {
        $quoteId = (int)$this->getRequest()->getParam('quote_id');
        $model = $this->quoteFactory->create();
        if (!empty($quoteId)) {
            /** @var QuoteData $modelData */
            $modelData = $this->quoteRepository->get($quoteId);
            $model->setData($modelData->__toArray());
            if (empty($modelData->getQuoteId())) {
                $this->messageManager->addErrorMessage(__('This quote no longer exists.'));
                /** @var Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->dataPersistor->set('jaroslawzielinski_quotes', $model);
        return parent::execute();
    }

    /**
     * @inheritDoc
     */
    protected function getTitle(): string
    {
        return (string)__('Edit Quote');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('JaroslawZielinski_TorahVerse::quotes');
    }
}
