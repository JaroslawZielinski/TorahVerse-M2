<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Form\Field;

use JaroslawZielinski\Torah\Bible\Service\Online\Client;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\Division;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use JaroslawZielinski\TorahVerse\Model\Verse;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Form\Field;

class Siglum extends Field
{
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
     * @inheritDoc
     */
    public function __construct(
        DataPersistorInterface $dataPersistor,
        Config $config,
        TorahFactory $torahFactory,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->dataPersistor = $dataPersistor;
        $this->config = $config;
        $this->torahFactory = $torahFactory;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

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

    /**
     * {@inheritDoc}
     *
     * @throws LocalizedException
     */
    public function getConfiguration(): array
    {
        $torah = $this->torahFactory->create();
        $structure = [];
        foreach (Resources::TORAH_TRANSLATIONS as $translationCode => $label) {
            /** @var Resources $translation **/
            $translation = $torah->getResourceByTranslationCode($translationCode);
            $subStructure = $translation->getBooks();
            $structure[$translationCode] = $subStructure;
        }
        $configuration = parent::getConfiguration();
        /** @var Verse $verse */
        $verse = $this->dataPersistor->get('jaroslawzielinski_verses');
        if (!empty($verse) && $verse->isObjectNew()) {
            $configuration['initialState'] = 1;
        }
        $configuration['language'] = $this->config->getInternalizationLanguage();
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
        return $configuration;
    }
}
