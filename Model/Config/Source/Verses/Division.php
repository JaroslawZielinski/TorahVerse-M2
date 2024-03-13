<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Verses;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class Division extends AbstractSource implements OptionSourceInterface
{
    public const MODE = [
        'two-division' => 'Old Testamen/New Testament',
        'three-division' => 'Tanakh/Nevi\'im ketuvim/Brithadasha'
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
