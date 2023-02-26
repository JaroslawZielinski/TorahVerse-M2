<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Slider;

use ITZielArt\TorahVerse\Model\Config;
use Magento\AdminNotification\Model\ResourceModel\System\Message\Collection;
use Magento\AdminNotification\Model\ResourceModel\System\Message\CollectionFactory;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;

class Content extends Template
{
    /**
     * @var Config
     */
    private $config;
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        CollectionFactory $collectionFactory,
        Context $context,
        array $data = [],
        ?JsonHelper $jsonHelper = null,
        ?DirectoryHelper $directoryHelper = null
    ) {
        $this->config = $config;
        $this->collectionFactory = $collectionFactory;
        parent::__construct(
            $context,
            $data,
            $jsonHelper,
            $directoryHelper
        );
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('ITZielArt_TorahVerse::slider/content.phtml');
        parent::_construct();
    }

    public function canShow(): bool
    {
        if (!$this->config->isModuleEnable()) {
            return false;
        }
        /** @var Collection $collection */
        $collection = $this->collectionFactory->create();
        return 0 === $collection->count();
    }
}
