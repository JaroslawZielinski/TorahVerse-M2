<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Form\Field;

use ITZielArt\TorahVerse\Block\Adminhtml\MultiUiSelect;
use ITZielArt\TorahVerse\Model\Config\Source\Sliders\Groups;
use Magento\Framework\View\Element\Context;
use Magento\Framework\View\Element\Html\Select;

class AvailableSliders extends Select
{
    /**
     * @var array
     */
    private $optionsArray;

    /**
     * @var Groups
     */
    private $groups;

    /**
     * @inheritDoc
     */
    public function __construct(
        Groups $groups,
        Context $context,
        array $data = []
    ) {
        $this->groups = $groups;
        parent::__construct($context, $data);
        $this->optionsArray = [];
    }

    public function setInputName(string $value): self
    {
        return $this->setName($value . '[]');
    }

    public function setInputId(string $value): self
    {
        return $this->setId($value);
    }

    /**
     * @inheritDoc
     */
    public function _toHtml(): string
    {
        if (!$this->getOptions()) {
            $this->setOptions($this->getSourceOptions());
        }
        $script = " <script>
                require([
                    'jquery',
                    'chosen'
                ], function ($, chosen) {
                    $('#" . $this->getId() . "').chosen({
                        width: '100%',
                        placeholder_text: '" . __(MultiUiSelect::SELECT_PLACEHOLDER) . "'
                    });
                })
            </script>";
        return parent::_toHtml() . $script;
    }

    private function getSourceOptions(): array
    {
        if (empty($this->optionsArray)) {
            $this->optionsArray = $this->groups->toOptionArray();
        }
        return $this->optionsArray;
    }
}
