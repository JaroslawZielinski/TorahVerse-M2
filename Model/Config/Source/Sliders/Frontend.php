<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class Frontend extends AbstractSource implements OptionSourceInterface
{
    public const FRONTEND = 'frontend';

    public const FRONTEND_OPTIONS = [
        self::FRONTEND => [
            'label' => 'Frontend',
            'value' => self::FRONTEND
        ]
    ];

    public function getOptions(): array
    {
        $options = [];
        foreach (self::FRONTEND_OPTIONS as $value => $option) {
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
