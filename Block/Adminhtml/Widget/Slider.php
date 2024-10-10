<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\Widget;

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\TorahVerse\Api\Data\GroupInterface;
use JaroslawZielinski\TorahVerse\Model\Data\Group;
use JaroslawZielinski\TorahVerse\Api\GroupRepositoryInterface;
use JaroslawZielinski\TorahVerse\Helper\Data;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse\CollectionFactory as VerseCollectionFactory;
use JaroslawZielinski\TorahVerse\Model\Verse;
use JaroslawZielinski\TorahVerse\Model\ResourceModel\Quote\CollectionFactory as QuoteCollectionFactory;
use JaroslawZielinski\TorahVerse\Model\Quote;
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
     * @var GroupRepositoryInterface
     */
    private $groupRepository;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @inheritDoc
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        GroupRepositoryInterface $groupRepository,
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
        $this->groupRepository = $groupRepository;
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
        $this->setTemplate('JaroslawZielinski_TorahVerse::widget/slider.phtml');
        $this->pageConfig->addPageAsset('JaroslawZielinski_TorahVerse::css/slider.css');
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
            'service_link_enable' => $this->config->isModuleServiceLinkEnabled(),
            'sweep_time' => $this->config->getModuleSweepTime(),
            'is_vertical_sweep_possible' => $this->config->isModuleVertical(),
            'vertical_sweep_time' => $this->config->getModuleVerticalSweepTime(),
            'is_group_colours' => $this->config->isModuleGroupColour(),
            'verses_ordered' => $this->config->isModuleVersesOrdered(),
            'text_colour' => $this->config->getModuleTextColour(),
            'mode' => $this->config->getModuleMode(),
            'content_shown_rows' => $this->config->getModuleContentShownRows(),
            'superHtmlId' => '#verseSliders '
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
        $siglumObject = SiglumFactory::createFromString($data['siglum']);
        $url = $onlineClient->getUrlBySiglum($siglumObject);
        return [
            'colour' => $colour,
            'antiColour' => Data::getContrastColor($colour),
            'groupName' => Data::escapeQuotes($data['groupName']),
            'content' => Data::escapeQuotes($data['content']),
            'unordered' => Data::escapeQuotes($data['unordered']),
            'description' => Data::escapeQuotes($data['description']),
            'url' => $this->config->isModuleServiceLinkEnabled() ? $url : ''
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
            'groupName' => __(Data::escapeQuotes($data['groupName'])),
            'name' => __(Data::escapeQuotes($data['name'])),
            'content' => __(Data::escapeQuotes($data['content'])),
            'unordered' => __(Data::escapeQuotes($data['content'])),
            'author' => __(Data::escapeQuotes($data['author'])),
            'description' => __(Data::escapeQuotes($data['description'])),
            'description2' => __(Data::escapeQuotes($data['description2'])),
            'description3' => __(Data::escapeQuotes($data['description3']))
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
        $now = new \DateTime();
        $todayOfTheMonth = $now->format('md');
        /** @var Quote $quote */
        foreach ($quoteCollection->getItems() as $quote) {
            $quoteData = $quote->getData();
            $groupId = $quoteData['group_id'];
            /** @var Group $group */
            $group = $this->groupRepository->get($groupId);
            $isAnnual = !!$group->getIsAnnual();
            if ($isAnnual) {
                $code = $quoteData['code'];
                $codeDayOfTheMonth = substr($code, -4);
                if ($codeDayOfTheMonth !== $todayOfTheMonth) {
                    continue;
                }
            }
            $items[] = [
                'data' => $this->convertQuoteDataToItem($quoteData),
                'template' => $isAnnual
                    ? $this->config->getModuleAnnualTemplate()
                    : $this->config->getModuleQuoteTemplate(),
                'group_colours_template' => $isAnnual
                    ? $this->config->getModuleGroupColoursAnnualTemplate()
                    : $this->config->getModuleGroupColoursQuoteTemplate()
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
