<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Groups;

use Magento\Framework\Data\OptionSourceInterface;

abstract class Options implements OptionSourceInterface
{
    /**
     * @var array
     */
    protected $options;

    /**
     * Get available options
     */
    abstract protected function getOptions();

    /**
     * @inheritDoc
     */
    public function toOptionArray(): array
    {
        if (empty($this->options)) {
            foreach ($this->getOptions() as $value => $label) {
                $this->options[] = [
                    'value' => $value,
                    'label' => $label
                ];
            }
        }
        return $this->options;
    }
}
