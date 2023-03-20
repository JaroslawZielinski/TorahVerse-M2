<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class Mode extends AbstractSource implements OptionSourceInterface
{
    public const MODE = [
        'autoplayinf' => 'Auto play infinity loop',
        'random' => 'Random view - static'
    ];

    public function getOptions(): array
    {
        foreach (self::MODE as $position => $label) {
            $options[] = [
                'label' => __($label),
                'value' => $position
            ];
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
