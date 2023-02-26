<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class Placement extends AbstractSource implements OptionSourceInterface
{
    private const PLACEMENTS = [
        'header_top_left' => 'Header Top Left',
        'header_top_right' => 'Header Top Right',
        'footer_left' => 'Footer Left',
        'footer_right' => 'Footer Right',
    ];

    public function getOptions(): array
    {
        $options[] = [
            'label' => __('Choose an Option') . '...',
            'value'=> null
        ];
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
