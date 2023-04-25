<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\System\Config;

use JaroslawZielinski\TorahVerse\Model\Quote\Install as QuoteInstall;
use JaroslawZielinski\TorahVerse\Model\Verse\Install as VerseInstall;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Psr\Log\LoggerInterface;
use Magento\Framework\Controller\Result\Json;

class Translate extends Action
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var VerseInstall
     */
    private $verseInstall;

    /**
     * @var QuoteInstall
     */
    private $quoteInstall;

    /**
     * @var JsonFactory
     */
    private $resultJsonFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        LoggerInterface $logger,
        Config $config,
        VerseInstall $verseInstall,
        QuoteInstall $quoteInstall,
        JsonFactory $resultJsonFactory,
        Context $context
    ) {
        $this->logger = $logger;
        $this->config = $config;
        $this->verseInstall = $verseInstall;
        $this->quoteInstall = $quoteInstall;
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $message = null;
        try {
            $language = $this->config->getInternalizationLanguage();
            $this->verseInstall->execute($language);
            $this->quoteInstall->execute($language);
            $languageLabel = __(Language::LANGUAGE_OPTIONS[$language]['label']);
            $message = sprintf('language: \'%s\'', $languageLabel);
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());
        }
        /** @var Json $result */
        $result = $this->resultJsonFactory->create();
        return $result->setData(['success' => true, 'message' => $message]);
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('JaroslawZielinski_TorahVerse::verses');
    }
}
