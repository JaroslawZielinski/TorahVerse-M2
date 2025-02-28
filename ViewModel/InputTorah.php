<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\ViewModel;

use JaroslawZielinski\Torah\Bible\Service\Online\Client;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\Division;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use JaroslawZielinski\TorahVerse\Model\Verse;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;
use JaroslawZielinski\TorahVerse\Helper\Data;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\Translation as TranslationOptions;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;

class InputTorah implements ArgumentInterface
{
    /**
     * @var TranslationOptions
     */
    private $translationOptions;

    /**
     * @var JsonSerializer
     */
    private $jsonSerializer;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var TorahFactory
     */
    private $torahFactory;

    /**
     */
    public function __construct(
        TranslationOptions $translationOptions,
        JsonSerializer $jsonSerializer,
        DataPersistorInterface $dataPersistor,
        Config $config,
        TorahFactory $torahFactory,
    ) {
        $this->translationOptions = $translationOptions;
        $this->jsonSerializer = $jsonSerializer;
        $this->dataPersistor = $dataPersistor;
        $this->config = $config;
        $this->torahFactory = $torahFactory;
    }

    /**
     */
    protected function getDivision(): array
    {
        switch ($this->config->getTorahInputDivision()) {
            default:
            case Division::TWO_DIVISION_MODE:
                return Resources::TORAH_BOOKS_TWO_DIVISION;
            case Division::THREE_DIVISION_MODE:
                return Resources::TORAH_BOOKS_THREE_DIVISION;
        }
    }

    public function setConfig(array $config): self
    {
        $this->config = $config;
        return $this;
    }

    /**
     */
    public function getConfiguration(array $configuration = []): array
    {
        $torah = $this->torahFactory->create();
        $structure = [];
        foreach (Resources::TORAH_TRANSLATIONS as $translationCode => $label) {
            /** @var Resources $translation **/
            $translation = $torah->getResourceByTranslationCode($translationCode);
            $subStructure = $translation->getBooks();
            $structure[$translationCode] = $subStructure;
        }
        /** @var Verse $verse */
        $verse = $this->dataPersistor->get('jaroslawzielinski_verses');
        if (!empty($verse) && $verse->isObjectNew()) {
            $configuration['initialState'] = 1;
        }
        $internalizationLanguage = $this->config->getInternalizationLanguage();
        $configuration['language'] = $internalizationLanguage;
        $configuration['division'] = $this->getDivision();
        $divisionTranslation = [];
        array_map(
            function ($value) use (&$divisionTranslation) {
                $key = $value;
                $divisionTranslation[$key] = (string)__($value);
            },
            array_keys($this->getDivision())
        );
        $configuration['divisionTranslation'] = $divisionTranslation;
        $configuration['divisionType'] = $this->config->getTorahInputDivision();
        $configuration['structure'] = $structure;
        $configuration['baseUrl'] = Client::getBaseUrl();
        $configuration['service_link_enable'] = $this->config->isModuleServiceLinkEnabled();
        $defaultPl = $configuration['default_pl'] ?? null;
        $defaultEn = $configuration['default_en'] ?? null;
        if (!empty($defaultPl) && !empty($defaultEn)) {
            switch ($internalizationLanguage) {
                case Language::LANGUAGE_PL:
                    $configuration['initialValue'] = $defaultPl;
                    break;
                default:
                case Language::LANGUAGE_EN;
                $configuration['initialValue'] = $defaultEn;
                    break;
            }
        }
        return $configuration;
    }

    /**
     */
    public function arrayToJson(array $inputArray): string
    {
        return Data::escapeQuotes($this->jsonSerializer->serialize($inputArray));
    }

    /**
     */
    public function getOptions(): array
    {
        return $this->translationOptions->toOptionArray();
    }
}
