<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Widget;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Model\Config;
use ITZielArt\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use ITZielArt\TorahVerse\Model\Verse;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\AdminNotification\Model\ResourceModel\System\Message\CollectionFactory;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;

abstract class Slider extends Template
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var VerseCollectionFactory
     */
    private $verseCollectionFactory;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var JsonHelper
     */
    private $jsonSerializer;

    /**
     * @inheritDoc
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        VerseCollectionFactory $verseCollectionFactory,
        Config $config,
        JsonSerializer $jsonSerializer,
        Context $context,
        array $data = [],
        ?JsonHelper $jsonHelper = null,
        ?DirectoryHelper $directoryHelper = null
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->verseCollectionFactory = $verseCollectionFactory;
        $this->config = $config;
        $this->jsonSerializer = $jsonSerializer;
        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('ITZielArt_TorahVerse::widget/slider.phtml');
        parent::_construct();
    }

    /**
     */
    public function isVisible(): bool
    {
        $collection = $this->collectionFactory->create();
        return 0 === $collection->count() && $this->config->isModuleEnable();
    }

    /**
     */
    public function getConfig(): array
    {
        $isGroupColoursEnable = $this->config->isModuleGroupColour();
        return [
            'enabled' => $this->config->isModuleEnable(),
            'verses_ordered' => $this->config->isModuleVersesOrdered(),
            'sweep_time' => $this->config->getModuleSweepTime(),
            'is_vertical_sweep_possible' => $this->config->isModuleVertical(),
            'vertical_sweep_time' => $this->config->getModuleVerticalSweepTime(),
            'template' => $isGroupColoursEnable ?
                $this->config->getModuleGroupColoursTemplate() :
                $this->config->getModuleTemplate()
        ];
    }

    /**
     */
    public function getItems(array $groupsArray = []): array
    {
        $collection = $this->verseCollectionFactory->create();
        $collection
            ->addFieldToFilter(GroupInterface::CODE, ['in' => $groupsArray]);
        $items = [];
        /** @var Verse $verse */
        foreach ($collection->getItems() as $verse) {
            $items[] = $verse->getData();
        }
        return $items;
    }

    public function arrayToJson(array $inputArray): string
    {
        return $this->jsonSerializer->serialize($inputArray);
    }
}
