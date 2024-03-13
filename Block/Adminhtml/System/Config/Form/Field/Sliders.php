<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\System\Config\Form\Field;

use JaroslawZielinski\TorahVerse\Block\Adminhtml\Form\Field\AvailableSliders;
use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\BlockInterface;

class Sliders extends AbstractFieldArray
{
    public const CODE = 'code';

    public const SLIDER = 'slider';

    /**
     * @var BlockInterface
     */
    private $availableSlidersRenderer;

    /**
     * @inheritdoc
     * @throws LocalizedException
     */
    protected function _prepareToRender(): void
    {
        $this->addColumn(self::CODE, [
            'label' => 'Code',
            'class' => 'required-entry validate-data',
            'style' => 'width: 188px'
        ]);

        $this->addColumn(self::SLIDER, [
            'label' => 'Slider',
            'renderer' => $this->getAvailableSlidersRenderer()
                ->setExtraParams('multiple="multiple" style="min-width: 240px;height: 300px;"')
        ]);

        $this->_addAfter = false;
        $this->_addButtonLabel = 'Add';
    }

    /**
     * @throws LocalizedException
     */
    private function getAvailableSlidersRenderer(): BlockInterface
    {
        if (empty($this->availableSlidersRenderer)) {
            $this->availableSlidersRenderer = $this->getLayout()->createBlock(
                AvailableSliders::class,
                '',
                [
                    'data' => [
                        'is_render_to_js_template' => true,
                        'class' => 'required-entry'
                    ]
                ]
            );
        }
        return $this->availableSlidersRenderer;
    }

    /**
     * @inheritDoc
     * @throws LocalizedException
     */
    protected function _prepareArrayRow(DataObject $row): void
    {
        $options = [];
        $sliders = $row->getSlider() ?? [];
        if (count($sliders) > 0) {
            foreach ($sliders as $slider) {
                $options['option_' . $this->getAvailableSlidersRenderer()->calcOptionHash($slider)] = 'selected="selected"';
            }
        }
        $row->setData('option_extra_attrs', $options);
    }
}
