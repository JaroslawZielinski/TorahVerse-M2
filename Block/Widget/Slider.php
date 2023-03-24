<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Widget;

use GuzzleHttp\Client;
use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Helper\Data;
use ITZielArt\TorahVerse\Model\Config;
use ITZielArt\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use ITZielArt\TorahVerse\Model\Verse;
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
        Config $config,
        JsonSerializer $jsonSerializer,
        LoggerInterface $logger,
        Template\Context $context,
        array $data = []
    ) {
        $this->pagConfig = $pagConfig;
        $this->verseCollectionFactory = $verseCollectionFactory;
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
            'sweep_time' => $this->config->getModuleSweepTime(),
            'is_vertical_sweep_possible' => $this->config->isModuleVertical(),
            'vertical_sweep_time' => $this->config->getModuleVerticalSweepTime(),
            'verse_template' => $isGroupColoursEnable ?
                $this->config->getModuleGroupColoursVerseTemplate() :
                $this->config->getModuleVerseTemplate(),
            'quote_template' => $isGroupColoursEnable ?
                $this->config->getModuleGroupColoursQuoteTemplate() :
                $this->config->getModuleQuoteTemplate(),
            'verses_ordered' => $this->config->isModuleVersesOrdered(),
            'text_colour' => $this->config->getModuleTextColour(),
            'mode' => $this->config->getModuleMode()
        ];
    }

    /**
     * @throws \Exception
     */
    private function convertDataToItem(array $data): array
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
            'groupName' => $data['groupName'],
            'content' => $data['content'],
            'unordered' => $data['unordered'],
            'description' => $data['description'],
            'url' => $url
        ];
    }

    /**
     * @throws \Exception
     */
    public function getItems(array $groupsArray = []): array
    {
        $collection = $this->verseCollectionFactory->create();
        $collection
            ->addFieldToFilter(GroupInterface::CODE, ['in' => $groupsArray]);
        $items = [];
        /** @var Verse $verse */
        foreach ($collection->getItems() as $verse) {
            $items[] = $this->convertDataToItem($verse->getData());
        }
        return $items;
    }

    public function arrayToJson(array $inputArray): string
    {
        return $this->jsonSerializer->serialize($inputArray);
    }
}
