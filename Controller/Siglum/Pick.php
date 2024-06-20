<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Siglum;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Pick extends Action
{
    /**
     * @var PageFactory
     */
    private $resultPageFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        PageFactory $resultPageFactory,
        Context $context
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
