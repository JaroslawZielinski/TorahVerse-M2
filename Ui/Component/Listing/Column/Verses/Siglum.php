<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\Listing\Column\Verses;

use GuzzleHttp\Client;
use ITZielArt\TorahVerse\Api\Data\VerseInterface;
use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use ITZielArt\TorahVerse\Model\Data\Verse;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use Magento\Framework\Api\AttributeInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Psr\Log\LoggerInterface;

class Siglum extends Column
{
    public const COLUMN_NAME = 'siglum';
    public const COLUMN_TRANSLATION = 'translation';
    public const COLUMN_VERSE_ID = 'verse_id';
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        LoggerInterface $logger,
        VerseRepositoryInterface $verseRepository,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->logger = $logger;
        $this->verseRepository = $verseRepository;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * @throws LocalizedException
     * @throws \Exception
     */
    private function getServiceAnchor(int $verseId, string $translation, string $siglum): string
    {
        $client = new Service\Client($this->logger, new Client());
        $siglumObject = SiglumFactory::createFromTranslationAndString($translation, $siglum);
        $url = $client->getUrlBySiglum($siglumObject);
        /** @var VerseInterface|Verse $verseObject */
        $verseObject = $this->verseRepository->get($verseId);
        return <<<EOT
<a
    href="{$url}"
    title="{$verseObject->getContent()}"
    target="_blank">
    {$verseObject->getDescription()}
</a>
EOT;
    }

    /**
     * {@inheritdoc}
     * @throws LocalizedException
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_NAME])) {
                    /** @var AttributeInterface $groupCustomerAttribute */
                    $item[self::COLUMN_NAME] = $this->getServiceAnchor(
                        (int)$item[self::COLUMN_VERSE_ID],
                        $item[self::COLUMN_TRANSLATION],
                        $item[self::COLUMN_NAME]
                    );
                }
            }
        }

        return $dataSource;
    }
}
