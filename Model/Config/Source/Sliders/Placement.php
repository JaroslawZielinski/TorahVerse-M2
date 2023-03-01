<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;

class Placement extends AbstractSource implements OptionSourceInterface
{
    private const PLACEMENTS = [
        'page_header_top' => 'After page header top',
        'main_content_top' => 'Main content top',
        'main_content_bottom' => 'Main content bottom',
        'before_page_footer' => 'Before page footer',
        'page_footer' => 'Page footer'
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
