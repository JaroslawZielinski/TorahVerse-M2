<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;
use JaroslawZielinski\Torah\Bible\Torah;

class Language extends AbstractSource implements OptionSourceInterface
{
    public function getOptions(): array
    {
        return [
            ['label' => __('English'), 'value' => Torah::LANGUAGE_EN],
            ['label' => __('Polish'), 'value' => Torah::LANGUAGE_PL]
        ];
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
