<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\Widget;

use Magento\Backend\Block\Template;
use Magento\Framework\UrlInterface;
use Magento\Directory\Helper\Data as DirectoryHelper;
use Magento\Framework\Json\Helper\Data as JsonHelper;

/**
 * @method getHtmlId(): string
 */
class InputTorah extends Template
{
    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    /**
     * @inheritDoc
     */
    public function __construct(
        UrlInterface $urlBuilder,
        \Magento\Backend\Block\Template\Context $context,
        array $data = [],
        ?JsonHelper $jsonHelper = null,
        ?DirectoryHelper $directoryHelper = null
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct(
            $context,
            $data,
            $jsonHelper,
            $directoryHelper
        );
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::widget/inputTorah.phtml');
        parent::_construct();
    }

    /**
     */
    public function getConfig(): array
    {
        $config = $this->getData('config') ?? [];
        $config['previewUrl'] = $this->urlBuilder->getUrl('jaroslawzielinski_torahverse/siglum/preview');
        $config['structureUrl'] = $this->urlBuilder->getUrl('jaroslawzielinski_torahverse/siglum/structure');
        return $config;
    }
}
