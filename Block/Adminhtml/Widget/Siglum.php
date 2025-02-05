<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\Widget;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Factory as ElementFactory;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Widget\Button;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\Text;
use Magento\Framework\Exception\LocalizedException;

/**
 * @see https://scandiweb.com/blog/magento-series-implementing-a-widget/
 */
class Siglum extends Template
{
    /**
     * @var ElementFactory
     */
    protected $elementFactory;

    /**
     * @param Context $context
     * @param ElementFactory $elementFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        ElementFactory $elementFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->elementFactory = $elementFactory;
    }

    /**
     * @inheritDoc
     */
    public function prepareElementHtml(AbstractElement $element)
    {
        $config = $this->_getData('config');
        $element->setData('after_element_html', 'JartoJarot' . $config['value']);
        return $element;
    }
}
