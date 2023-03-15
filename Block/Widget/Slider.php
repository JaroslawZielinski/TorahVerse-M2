<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Widget;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Model\Config;
use ITZielArt\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use ITZielArt\TorahVerse\Model\Verse;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Page\Config as PageConfig;
use Magento\Widget\Block\BlockInterface;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;

abstract class Slider extends Template implements BlockInterface
{
    /**
     * @var VerseCollectionFactory
     */
    private $verseCollectionFactory;

    /**
     * @var Config
     */
    protected $config;
    /**
     * @var JsonSerializer
     */
    private $jsonSerializer;
    /**
     * @var PageConfig
     */
    private $pagConfig;

    /**
     * @inheritDoc
     */
    public function __construct(
        PageConfig $pagConfig,
        VerseCollectionFactory $verseCollectionFactory,
        Config $config,
        JsonSerializer $jsonSerializer,
        Template\Context $context,
        array $data = []
    ) {
        $this->pagConfig = $pagConfig;
        $this->verseCollectionFactory = $verseCollectionFactory;
        $this->config = $config;
        $this->jsonSerializer = $jsonSerializer;
        parent::__construct($context, $data);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('ITZielArt_TorahVerse::widget/slider.phtml');
        $this->pageConfig->addPageAsset('ITZielArt_TorahVerse::css/slider.css');
        parent::_construct();
    }

    /**
     */
    public function isVisible(): bool
    {
        return $this->config->isModuleEnable();
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
