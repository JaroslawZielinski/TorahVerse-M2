<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Cache;


use JaroslawZielinski\Torah\Bible\Service\Offline\Repository as BibleRepository;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\Description;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\DivisionParts;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use Magento\Framework\Data\Collection;
use Magento\Framework\Data\CollectionFactory;
use Magento\Framework\DataObjectFactory;
use JaroslawZielinski\Torah\Bible\Service\Online\Response as OnlineResponse;

class Progress
{
    public const SEARCH_MODE_CASESENSITIVE = BibleRepository::SEARCH_MODE_CASESENSITIVE;

    public const SEARCH_MODE_CASEINSENSITIVE = BibleRepository::SEARCH_MODE_CASEINSENSITIVE;

    /**
     * @var DivisionParts
     */
    private $divisionParts;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var DataObjectFactory
     */
    private $dataObjectFactory;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var BibleRepository
     */
    private $bibleRepository;

    /**
     * @var Torah
     */
    private $torah;

    /**
     */
    public function __construct(
        DivisionParts $divisionParts,
        Config $config,
        DataObjectFactory $dataObjectFactory,
        CollectionFactory $collectionFactory,
        TorahFactory $torahFactory,
        BibleRepository $bibleRepository
    ) {
        $this->divisionParts = $divisionParts;
        $this->config = $config;
        $this->dataObjectFactory = $dataObjectFactory;
        $this->collectionFactory = $collectionFactory;
        $this->bibleRepository = $bibleRepository;
        $this->torah = $torahFactory->create();
    }

    /**
     */
    public function getCachedVerses(string $translation): int
    {
        return $this->bibleRepository->totalCount($translation);
    }

    /**
     */
    public function getMaxVerses(string $translation):int
    {
        $resource = $this->torah->getResourceByTranslationCode($translation);
        return $resource->getMaxVerse();
    }

    /**
     * @throws \Exception
     */
    public function search(
        string $search,
        string $translation,
        ?string $search2,
        int $caseSensitive = self::SEARCH_MODE_CASEINSENSITIVE,
        array $divisionParts = [],
        int $context = 0
    ): Collection {
        $collection = $this
            ->collectionFactory
            ->create();
        try {
            $results = $this->bibleRepository->search($search, $translation, $search2, $caseSensitive);
        } catch (\Exception $e) {
            return $collection;
        }
        $acceptedBooks = $this->getAcceptedBooks($divisionParts);
        foreach ($results as $key => $row) {
            $siglum = SiglumFactory::createFromTranslationAndString($translation, $row['siglum']);
            $row['content'] = sprintf(OnlineResponse::ORDERED_VERSE, $siglum->getVerseStart(), $row['content']);
            $row['translation'] = $translation;
            $language = $this->config->getInternalizationLanguage();
            $text = $this->torah->getTextBySiglum($siglum, $language, $context, $context);
            $row['siglum'] = $text->getSigla();
            $row['description'] = $text->getDescription();
            $row['new_content'] = $text->getOrdered();
            $book = $siglum->getBook();
            if (empty($acceptedBooks) || in_array($book, $acceptedBooks)) {
                $varienObject = $this->dataObjectFactory->create();
                $varienObject->setData($row);
                $collection->addItem($varienObject);
            }
        }
        return $collection;
    }

    private function getAcceptedBooks(array $divisionParts): array
    {
        $acceptedBooks = [];
        foreach ($divisionParts as $divisionPart) {
            $divisionBooks = $this->divisionParts->getDivision();
            $divisionPartBooks = $divisionBooks[$divisionPart] ?? [];
            if (empty($divisionPartBooks)) {
                continue;
            }
            $books = array_keys($divisionPartBooks);
            $acceptedBooks = array_merge($acceptedBooks, $books);
        }
        return $acceptedBooks;
    }
}
