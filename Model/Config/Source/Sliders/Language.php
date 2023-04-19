<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;
use JaroslawZielinski\Torah\Bible\Torah;

class Language extends AbstractSource implements OptionSourceInterface
{
    public const LANGUAGE_EN = Torah::LANGUAGE_EN;

    public const LANGUAGE_PL = Torah::LANGUAGE_PL;

    public const LANGUAGE_OPTIONS = [
        self::LANGUAGE_EN => [
            'label' => 'English',
            'value' => self::LANGUAGE_EN
        ],
        self::LANGUAGE_PL => [
            'label' => 'Polish',
            'value' => self::LANGUAGE_PL
        ]
    ];

    public function getOptions(): array
    {
        $options = [];
        foreach (self::LANGUAGE_OPTIONS as $value => $option) {
            $options[] = ['label' => __($option['label']), 'value' => $value];
        }
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
}
