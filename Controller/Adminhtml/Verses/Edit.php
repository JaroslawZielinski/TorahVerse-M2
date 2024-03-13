<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\Verses;

use JaroslawZielinski\TorahVerse\Api\VerseRepositoryInterface;
use JaroslawZielinski\TorahVerse\Controller\Adminhtml\Grid;
use JaroslawZielinski\TorahVerse\Model\Data\Verse as VerseData;
use JaroslawZielinski\TorahVerse\Model\VerseFactory;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;

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
        $this->dataPersistor->set('jaroslawzielinski_verses', $model);
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
        return $this->_authorization->isAllowed('JaroslawZielinski_TorahVerse::verses');
    }
}
