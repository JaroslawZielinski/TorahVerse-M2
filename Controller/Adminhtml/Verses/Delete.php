<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Verses;

use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class Delete extends Action
{
    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        VerseRepositoryInterface $verseRepository,
        Context $context
    ) {
        $this->verseRepository = $verseRepository;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $verseId = (int)$this->getRequest()->getParam('verse_id');
        if (!empty($verseId)) {
            try {
                $this->verseRepository->deleteById($verseId);
            } catch (NoSuchEntityException|LocalizedException $e) {
                $this->messageManager->addErrorMessage(__('This verse no longer exists.'));
                /** @var Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->messageManager->addSuccessMessage(__('The verse succesfully deleted [ID: %1].', $verseId));
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }
}
