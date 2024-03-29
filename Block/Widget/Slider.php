<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Widget;

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;
use JaroslawZielinski\TorahVerse\Helper\Data;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use JaroslawZielinski\TorahVerse\Model\Verse;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Quote\CollectionFactory as QuoteCollectionFactory;
use JaroslawZielinski\TorahVerse\Model\Quote;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Page\Config as PageConfig;
use Magento\Widget\Block\BlockInterface;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;
use Psr\Log\LoggerInterface;

abstract class Slider extends Template implements BlockInterface
{
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
     * @var JsonSerializer
     */
    private $jsonSerializer;

    /**
     * @var PageConfig
     */
    private $pagConfig;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @inheritDoc
     */
    public function __construct(
        PageConfig $pagConfig,
        VerseCollectionFactory $verseCollectionFactory,
        QuoteCollectionFactory $quoteCollectionFactory,
        Config $config,
        JsonSerializer $jsonSerializer,
        LoggerInterface $logger,
        Template\Context $context,
        array $data = []
    ) {
        $this->pagConfig = $pagConfig;
        $this->verseCollectionFactory = $verseCollectionFactory;
        $this->quoteCollectionFactory = $quoteCollectionFactory;
        $this->config = $config;
        $this->jsonSerializer = $jsonSerializer;
        $this->logger = $logger;
        parent::__construct($context, $data);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::widget/slider.phtml');
        $this->pageConfig->addPageAsset('JaroslawZielinski_TorahVerse::css/slider.css');
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
        return [
            'enabled' => $this->config->isModuleEnable(),
            'sweep_time' => $this->config->getModuleSweepTime(),
            'is_vertical_sweep_possible' => $this->config->isModuleVertical(),
            'vertical_sweep_time' => $this->config->getModuleVerticalSweepTime(),
            'is_group_colours' => $this->config->isModuleGroupColour(),
            'verses_ordered' => $this->config->isModuleVersesOrdered(),
            'text_colour' => $this->config->getModuleTextColour(),
            'mode' => $this->config->getModuleMode(),
            'content_shown_rows' => $this->config->getModuleContentShownRows()
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
        $onlineClient = new Service\Online\Client($this->logger, new GuzzleClient());
        $siglumObject = SiglumFactory::createFromTranslationAndString($data['translation'], $data['siglum']);
        $url = $onlineClient->getUrlBySiglum($siglumObject);
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

    /**
     */
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
     * @throws \Exception
     */
    public function getItems(array $groupsArray = []): array
    {
        $items = [];
        $verseCollection = $this->verseCollectionFactory->create();
        $verseCollection
            ->addFieldToFilter('groups.' . GroupInterface::CODE, ['in' => $groupsArray]);
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
            ->addFieldToFilter('groups.' . GroupInterface::CODE, ['in' => $groupsArray]);
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

    /**
     */
    public function arrayToJson(array $inputArray): string
    {
        return $this->jsonSerializer->serialize($inputArray);
    }

    /**
     */
    public function getModuleCustomStyles(): ?string
    {
        return $this->config->getModuleCustomStyles();
    }

    /**
     */
    public function getBackgroundHoverColour(): ?string
    {
        return $this->config->getModuleBackgroundHoverColour();
    }
}
