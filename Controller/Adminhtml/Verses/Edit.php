<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Verses;

use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use ITZielArt\TorahVerse\Controller\Adminhtml\Grid;
use ITZielArt\TorahVerse\Model\Data\Verse as VerseData;
use ITZielArt\TorahVerse\Model\VerseFactory;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Grid implements HttpGetActionInterface
{
    /**
     * @var VerseFactory
     */
    private $verseFactory;
    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        VerseFactory $verseFactory,
        VerseRepositoryInterface $verseRepository,
        DataPersistorInterface $dataPersistor,
        Context $context
    ) {
        $this->verseFactory = $verseFactory;
        $this->verseRepository = $verseRepository;
        parent::__construct($dataPersistor, $context);
    }

    /**
     * {@inheritDoc}
     * @throws LocalizedException
     */
    public function execute()
    {
        $verseId = (int)$this->getRequest()->getParam('verse_id');
        $model = $this->verseFactory->create();
        if (!empty($verseId)) {
            /** @var VerseData $modelData */
            $modelData = $this->verseRepository->get($verseId);
            $model->setData($modelData->__toArray());
            if (empty($modelData->getVerseId())) {
                $this->messageManager->addErrorMessage(__('This verse no longer exists.'));
                /** @var Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->dataPersistor->set('itzielart_verses', $model);
        return parent::execute();
    }

    /**
     * @inheritDoc
     */
    protected function getTitle(): string
    {
        return (string)__('Edit Verse');
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::verses');
    }
}
