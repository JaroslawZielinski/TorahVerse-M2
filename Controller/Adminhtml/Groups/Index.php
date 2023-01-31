<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Adminhtml\Groups;

use Magento\Backend\App\Action\Context;
use ITZielArt\TorahVerse\Controller\Adminhtml\Grid;
use ITZielArt\TorahVerse\Model\Config;
use Magento\Framework\App\Request\DataPersistor;

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
        DataPersistor $dataPersistor,
        Context $context
    ) {
        $this->config = $config;
        parent::__construct($dataPersistor, $context);
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ITZielArt_TorahVerse::groups');
    }

    /**
     * @inheritDoc
     */
    protected function getTitle(): string
    {
        return (string)__('Groups');
    }
}
