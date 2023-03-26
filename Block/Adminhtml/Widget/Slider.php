<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Widget;

use GuzzleHttp\Client;
use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Helper\Data;
use ITZielArt\TorahVerse\Model\Config;
use ITZielArt\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use ITZielArt\TorahVerse\Model\Verse;
use ITZielArt\TorahVerse\Model\ResourceModel\Quote\CollectionFactory as QuoteCollectionFactory;
use ITZielArt\TorahVerse\Model\Quote;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\AdminNotification\Model\ResourceModel\System\Message\CollectionFactory;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;
use Psr\Log\LoggerInterface;

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
     * @var QuoteCollectionFactory
     */
    private $quoteCollectionFactory;
    /**
     * @var Config
     */
    protected $config;
    /**
     * @var JsonHelper
     */
    private $jsonSerializer;
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @inheritDoc
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        VerseCollectionFactory $verseCollectionFactory,
        QuoteCollectionFactory $quoteCollectionFactory,
        Config $config,
        JsonSerializer $jsonSerializer,
        LoggerInterface $logger,
        Context $context,
        array $data = [],
        ?JsonHelper $jsonHelper = null,
        ?DirectoryHelper $directoryHelper = null
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->verseCollectionFactory = $verseCollectionFactory;
        $this->quoteCollectionFactory = $quoteCollectionFactory;
        $this->config = $config;
        $this->jsonSerializer = $jsonSerializer;
        $this->logger = $logger;
        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
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
        $collection = $this->collectionFactory->create();
        return 0 === $collection->count() && $this->config->isModuleEnable();
    }

    /**
     */
    public function getConfig(): array
    {
        return [
            'enabled' => $this->config->isModuleEnable(),
            'sweep_time' => $this->config->getModuleSweepTime(),
            'is_vertical_sweep_possible' => $this->config->isModuleVertical(),
            'vertical_sweep_time' => $this->config->getModuleVerticalSweepTime(),
            'vertical_characters_trigger' => $this->config->getModuleVerticalCharactersTrigger(),
            'is_group_colours' => $this->config->isModuleGroupColour(),
            'verses_ordered' => $this->config->isModuleVersesOrdered(),
            'text_colour' => $this->config->getModuleTextColour(),
            'mode' => $this->config->getModuleMode()
        ];
    }

    /**
     * @throws \Exception
     */
    private function convertVerseDataToItem(array $data): array
    {
        $colour = $data['colour_value'];
        if (GroupInterface::NO_COLOUR === $colour) {
            $colour = '#FFFFFF';
        }
        $client = new Service\Client($this->logger, new Client());
        $siglumObject = SiglumFactory::createFromTranslationAndString($data['translation'], $data['siglum']);
        $url = $client->getUrlBySiglum($siglumObject);
        return [
            'colour' => $colour,
            'antiColour' => Data::getContrastColor($colour),
            'groupName' => Data::escapeQuotes($data['groupName']),
            'content' => Data::escapeQuotes($data['content']),
            'unordered' => Data::escapeQuotes($data['unordered']),
            'description' => Data::escapeQuotes($data['description']),
            'url' => $url
        ];
    }

    private function convertQuoteDataToItem(array $data): array
    {
        $colour = $data['colour_value'];
        if (GroupInterface::NO_COLOUR === $colour) {
            $colour = '#FFFFFF';
        }
        return [
            'colour' => $colour,
            'antiColour' => Data::getContrastColor($colour),
            'groupName' => Data::escapeQuotes($data['groupName']),
            'content' => Data::escapeQuotes($data['content']),
            'unordered' => Data::escapeQuotes($data['content']),
            'author' => Data::escapeQuotes($data['author']),
            'description' => Data::escapeQuotes($data['description'])
        ];
    }

    /**
     */
    public function getItems(array $groupsArray = []): array
    {
        $items = [];
        $verseCollection = $this->verseCollectionFactory->create();
        $verseCollection
            ->addFieldToFilter(GroupInterface::CODE, ['in' => $groupsArray]);
        /** @var Verse $verse */
        foreach ($verseCollection->getItems() as $verse) {
            $items[] = [
                'data' => $this->convertVerseDataToItem($verse->getData()),
                'template' => $this->config->getModuleVerseTemplate(),
                'group_colours_template' => $this->config->getModuleGroupColoursVerseTemplate()
            ];
        }
        $quoteCollection = $this->quoteCollectionFactory->create();
        $quoteCollection
            ->addFieldToFilter(GroupInterface::CODE, ['in' => $groupsArray]);
        /** @var Quote $quote */
        foreach ($quoteCollection->getItems() as $quote) {
            $items[] = [
                'data' => $this->convertQuoteDataToItem($quote->getData()),
                'template' => $this->config->getModuleQuoteTemplate(),
                'group_colours_template' => $this->config->getModuleGroupColoursQuoteTemplate()
            ];
        }
        return $items;
    }

    public function arrayToJson(array $inputArray): string
    {
        return $this->jsonSerializer->serialize($inputArray);
    }
}
