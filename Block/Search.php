<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block;

use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\DivisionParts as DivisionParts;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\Translation as TranslationOptions;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use JaroslawZielinski\TorahVerse\Model\Config;

class Search extends Template
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var DivisionParts
     */
    private $divisionParts;

    /**
     * @var TranslationOptions
     */
    private $translationOptions;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        DivisionParts $divisionParts,
        TranslationOptions $translationOptions,
        Context $context,
        array $data = []
    ) {
        $this->config = $config;
        $this->divisionParts = $divisionParts;
        $this->translationOptions = $translationOptions;
        parent::__construct($context, $data);
    }

    /**
     */
    public function getRequired(bool $isRequired = true): string
    {
        return sprintf('data-validate=\'{"required":%s}\'', $isRequired ? 'true' : 'false');
    }

    /**
     */
    public function getSearchParts(): array
    {
        $defaults = $this->config->getTorahInputDivisionParts();
        $searchParts = [];
        foreach ($this->divisionParts->getOptions() as $option) {
            $option['checked'] = false;
            if (in_array($option['value'], $defaults)) {
                $option['checked'] = true;
            }
            $searchParts[] = $option;
        }
        return $searchParts;
    }

    /**
     */
    public function isDefaultCaseSensitive(): bool
    {
        return $this->config->isTorahInputCaseSensitive();
    }

    /**
     */
    public function getFormHtmlId(): string
    {
        return 'torahverse-search';
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::search.phtml');
        parent::_construct();
    }
}
