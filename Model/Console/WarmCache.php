<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Console;

use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;

class WarmCache
{
    /**
     * @var Torah
     */
    private $torah;

    /**
     */
    public function __construct(TorahFactory $torahFactory)
    {
        $this->torah = $torahFactory->create(['cache' => true]);
    }

    /**
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function execute(
        string $translation,
        callable $start = null,
        callable $iteration = null,
        callable $end = null
    ): void {
        $sigla = $this->getSiglaUponTranslation($translation);
        $max = count($sigla);
        if (!empty($start)) {
            $start($max);
        }
        foreach ($sigla as $siglum) {
            $this->torah->getTextBySiglum($siglum);
            if (!empty($iteration)) {
                $iteration();
            }
        }
        if (!empty($end)) {
            $end();
        }
    }
    
    /**
     * @return Siglum[]
     */
    private function getSiglaUponTranslation(string $translation): array
    {
        $resource = $this->torah->getResourceByTranslationCode($translation);
        $books = $resource->getBooks();
        $sigla = [];
        foreach([Resources::TANAKH, Resources::NEVIIMKETUVIM, Resources::BRITHADASHA] as $part) {
            foreach ($books[$part] as $book => $bookArray) {
                $chapters = $bookArray[Resources::CHAPTERS];
                foreach ($chapters as $chapter => $maxVerse) {
                    $siglum =
                        SiglumFactory::create(
                            $translation,
                            $book,
                            (string)$chapter,
                            sprintf('%s-%s', 1, $maxVerse)
                        );
                    $sigla[] = $siglum;
                }
            }
        }
        return $sigla;
    }
}
