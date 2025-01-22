<?php

namespace JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Data\OptionSourceInterface;
use JaroslawZielinski\TorahVerse\Model\Config;

class Codes extends AbstractSource implements OptionSourceInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @inheriDoc
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function getOptions(): array
    {
        $options = [
            [
                'label' => (string)__('None'),
                'value' => ''
            ]
        ];
        array_map(
            function ($item) use (&$options) {
                $value = $item['code'];
                $options[] = [
                    'label' => (string)__($value),
                    'value' => $value,
                ];
            },
            $this->config->getCustomSliders()
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
}
