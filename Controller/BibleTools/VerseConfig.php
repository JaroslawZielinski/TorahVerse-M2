<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\BibleTools;

use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class VerseConfig extends Action
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var PageFactory
     */
    private $resultPageFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        PageFactory $resultPageFactory,
        Context $context
    ) {
        $this->config = $config;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        if (!$this->config->isTorahInputBibleToolsEnabled()) {
            return $this->_redirect('noroute');
        }
        return $this->resultPageFactory->create();
    }
}
