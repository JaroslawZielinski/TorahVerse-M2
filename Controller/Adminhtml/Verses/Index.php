<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Verses;

use Magento\Backend\App\Action\Context;
use ITZielArt\TorahVerse\Controller\Adminhtml\Grid;
use ITZielArt\TorahVerse\Model\Config;

class Index extends Grid
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        Context $context
    ) {
        parent::__construct($context);
        $this->config = $config;
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::verses');
    }

    /**
     * @inheritDoc
     */
    protected function getTitle(): string
    {
        return (string)__('Verses');
    }
}
