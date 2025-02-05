<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\Widget\InputTorah;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Factory as ElementFactory;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Widget\Button;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\Text;
use Magento\Framework\Exception\LocalizedException;
use JaroslawZielinski\TorahVerse\Block\Adminhtml\Widget\InputTorah as InputTorahBlock;
use JaroslawZielinski\TorahVerse\ViewModel\InputTorah;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;
use Magento\Framework\Registry;
use Magento\Widget\Model\Widget\Instance;

/**
 * @see https://scandiweb.com/blog/magento-series-implementing-a-widget/
 */
class SiglumObject extends Template
{
    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var JsonSerializer
     */
    protected $jsonSerializer;

    /**
     * @var InputTorah
     */
    protected $inputTorah;

    /**
     * @inheritDoc
     */
    public function __construct(
        Registry $registry,
        JsonSerializer $jsonSerializer,
        InputTorah $inputTorah,
        Context $context,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->jsonSerializer = $jsonSerializer;
        $this->inputTorah = $inputTorah;
        parent::__construct($context, $data);
    }

    /**
     */
    private function getInputTorahBlock(string $htmlId)
    {
        // Pages/Blocks
        $widgetJson = $this->_request->getParam('widget', '{}');
        $params = $this->jsonSerializer->unserialize($widgetJson);
        // Widgets
        if (empty($params)) {
            /** @var Instance $widgetInstance */
            $widgetInstance = $this->registry->registry('current_widget_instance') ?? null;
            if (!empty($widgetInstance)) {
                $params = $widgetInstance->getWidgetParameters();
                $params['values']['siglum'] = $params['siglum'] ?? null;
            }
        }
        $config = $this->_getData('config');
        $config['name'] = 'parameters[siglum]';
        $siglum = $params['values']['siglum'] ?? null;
        if (!empty($siglum)) {
            $config['initialValue'] = $siglum;
            $config['initialState'] = 6;
        }

        /** @var InputTorahBlock $block */
        $block = $this->_layout
            ->createBlock(InputTorahBlock::class)
            ->setViewModel($this->inputTorah)
            ->setConfig($config)
            ->setHtmlId($htmlId);
        return $block;
    }

    /**
     */
    public function getInputTorahBlockHtml(string $htmlId): string
    {
        $versePickBlock = $this->getInputTorahBlock($htmlId);
        return !empty($versePickBlock) ? $versePickBlock->toHtml() : 'empty';
    }

    /**
     * {@inheritDoc}
     * @see https://magento.stackexchange.com/questions/258660/magento-2-how-to-bind-knockout-event-on-ajax-html-response#answer-258687
     */
    public function prepareElementHtml(AbstractElement $element)
    {
        $htmlId = 'input_Torah';
        $html = $this->getInputTorahBlockHtml($htmlId);
        $additionalStyles = <<<styles
<style type="text/css">
/*<![CDATA[*/
label[data-ui-id="wysiwyg-widget-options-fieldset-element-label-parameters-siglum-label"] + .admin__field-control.control .control-value,
label[data-ui-id="widget-instance-edit-tab-properties-fieldset-element-label-parameters-siglum-label"] + .admin__field-control.control .control-value { display: none; }
/*]]>*/
</style>
<script>
    require([
        'jquery',
    ], function($) {
        if ($.fn.applyBindings != undefined) {
            $('#{$htmlId}').trigger('contentUpdated');
            $('#{$htmlId}').applyBindings();
        }
    });
</script>
styles;
        $element->setData('after_element_html', $html . $additionalStyles);
        return $element;
    }
}
