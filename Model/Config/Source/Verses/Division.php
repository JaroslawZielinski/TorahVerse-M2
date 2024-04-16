<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Verses;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class Division extends AbstractSource implements OptionSourceInterface
{
    public const TWO_DIVISION_MODE = 'two-division';

    public const THREE_DIVISION_MODE = 'three-division';

    public const MODE = [
        self::TWO_DIVISION_MODE => 'Old Testamen/New Testament',
        self::THREE_DIVISION_MODE => 'Tanakh/Nevi\'im ketuvim/Brithadasha'
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
