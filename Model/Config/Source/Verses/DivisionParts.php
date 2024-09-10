<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Verses;

use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\TorahVerse\Model\Config;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class DivisionParts extends AbstractSource implements OptionSourceInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     */
    public function getOptions(): array
    {
        $options = [];
        array_map(
            function ($value) use (&$options) {
                $key = $value;
                $options[] = [
                    'label' => (string)__($value),
                    'value' => $key,
                ];
            },
            array_keys($this->getDivision())
        );
        return $options;
    }

    /**
     * @inheritDoc
     */
    public function getAllOptions(): ?array
    {
        if (empty($this->_options)) {
            $this->_options = $this->getOptions();
        }
        return $this->_options;
    }

    public function getDivision(): array
    {
        switch ($this->config->getTorahInputDivision()) {
            default:
            case Division::TWO_DIVISION_MODE:
                return Resources::TORAH_BOOKS_TWO_DIVISION;
            case Division::THREE_DIVISION_MODE:
                return Resources::TORAH_BOOKS_THREE_DIVISION;
        }
    }
}
