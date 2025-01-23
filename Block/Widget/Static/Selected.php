<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Widget\Static;

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;
use JaroslawZielinski\TorahVerse\Api\GroupRepositoryInterface;
use JaroslawZielinski\TorahVerse\Block\Widget\Slider;
use JaroslawZielinski\TorahVerse\Block\Widget\Slider\Custom;
use JaroslawZielinski\TorahVerse\Helper\Data;
use JaroslawZielinski\Torah\Bible\Service\Online\Client as OnlineClient;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Quote\CollectionFactory as QuoteCollectionFactory;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Page\Config as PageConfig;
use Psr\Log\LoggerInterface;

/**
 * @method getSiglum(): string
 * @method setSiglum(string $siglum): self
 * @method getGroupName(): string
 * @method getColorValue(): string
 * @method getLanguage(): string
 */
class Selected extends Custom
{
    /**
     * @var TorahFactory
     */
    private $torahFactory;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @inheritDoc
     */
    public function __construct(
        TorahFactory $torahFactory,
        PageConfig $pagConfig,
        GroupRepositoryInterface $groupRepository,
        VerseCollectionFactory $verseCollectionFactory,
        QuoteCollectionFactory $quoteCollectionFactory,
        Config $config,
        JsonSerializer $jsonSerializer,
        LoggerInterface $logger,
        Context $context,
        array $data = []
    ) {
        $this->torahFactory = $torahFactory;
        $this->logger = $logger;
        parent::__construct(
            $pagConfig,
            $groupRepository,
            $verseCollectionFactory,
            $quoteCollectionFactory,
            $config,
            $jsonSerializer,
            $logger,
            $context,
            $data
        );
        $this->torahFactory = $torahFactory;
    }

    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        $config = parent::getConfig();
        $config['mode'] = 'random';
        return $config;
    }

    /**
     * @inheritDoc
     */
    public function getItems(array $groupsArray = []): array
    {
        $siglum = $this->getSiglum();
        $groupName = $this->getGroupName();
        $colorValue = $this->getColorValue();
        $language = $this->getLanguage();
        return $this->getSingleItem($siglum, $groupName, $colorValue, $language);
    }

    /**
     * @throws \Exception
     */
    public function getSingleItem(string $siglum, string $groupName, string $colorValue, string $language): array
    {
        return [
            [
                'data' => $this->convertVerseDataToItem([
                    'language' => $language,
                    'siglum' => $siglum,
                    'groupName' => $groupName,
                    'colour_value' => $colorValue
                ]),
                'template' => $this->config->getModuleVerseTemplate(),
                'group_colours_template' => $this->config->getModuleGroupColoursVerseTemplate()
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    public function isVisible(): bool
    {
        return Slider::isVisible() && $this->config->isCustomEnable();
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
        $siglum = $data['siglum'];
        $language = $data['language'];
        $torah = $this->torahFactory->create();
        $siglumObject = SiglumFactory::createFromString($siglum);
        $text = $torah->getTextBySiglum($siglumObject, $language);
        $onlineClient = new OnlineClient($this->logger, new GuzzleClient());
        $url = $onlineClient->getUrlBySiglum($siglumObject);
        return [
            'colour' => $colour,
            'antiColour' => Data::getContrastColor($colour),
            'groupName' => Data::escapeQuotes($data['groupName']),
            'content' => Data::escapeQuotes($text->getOrdered()),
            'unordered' => Data::escapeQuotes($text->getUnOrdered()),
            'description' => Data::escapeQuotes($text->getDescription()),
            'url' => $this->config->isModuleServiceLinkEnabled() ? $url : ''
        ];
    }
}
