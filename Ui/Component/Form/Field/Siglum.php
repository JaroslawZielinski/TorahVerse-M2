<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Form\Field;

use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\Division;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Form\Field;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Translations\Resources;
use Magento\Framework\Exception\LocalizedException;

class Siglum extends Field
{
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
        Config $config,
        TorahFactory $torahFactory,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
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
        /** @var Torah $torah */
        $torah = $this->torahFactory->create();
        $structure = [];
        foreach (Resources::TORAH_TRANSLATIONS as $translationCode => $label) {
            /** @var Resources $translation **/
            $translation = $torah->getResourceByTranslationCode($translationCode);
            $subStructure = $translation->getBooks();
            $structure[$translationCode] = $subStructure;
        }
        $configuration = parent::getConfiguration();
        $configuration['language'] = $this->config->getInternalizationLanguage();
        $configuration['division'] = $this->getDivision();
        $configuration['divisionType'] = $this->config->getTorahInputDivision();
        $configuration['structure'] = $structure;
        return $configuration;
    }
}
