<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class Placement extends AbstractSource implements OptionSourceInterface
{
    public const PLACEMENTS = [
        'top.container' => 'After page header top',
        'content.top' => 'Main content top',
        'content.bottom' => 'Main content bottom',
        'page.bottom' => 'Before page footer',
        'footer' => 'Page footer',
        'footer-container' => 'Page Footer Container'
    ];

    public function getOptions(): array
    {
        foreach (self::PLACEMENTS as $position => $label) {
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
