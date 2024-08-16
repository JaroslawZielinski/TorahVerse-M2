<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\Translation as TranslationOptions;
use Magento\Ui\Component\Wrapper\UiComponent;

class Pick extends Template
{
    /**
     * @var TranslationOptions
     */
    private $translationOptions;

    /**
     * @inheritDoc
     */
    public function __construct(
        TranslationOptions $translationOptions,
        Context $context,
        array $data = []
    ) {
        $this->translationOptions = $translationOptions;
        parent::__construct($context, $data);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::pick.phtml');
        parent::_construct();
    }

    public function getTranslations(): array
    {
        return $this->translationOptions->toOptionArray();
    }

    /**
     *  Returns component ui form field (value part)
     */
    private function getVersePickComponent(): ?UiComponent
    {
        $uiComponents = $this->_layout->getAllBlocks();
        return $uiComponents['jaroslawzielinski_torahverse_siglumpick_form'] ?? null;
    }

    public function getVersePickComponentHtml(): string
    {
        $uiVersePickComponent = $this->getVersePickComponent();
        return !empty($uiVersePickComponent) ? $uiVersePickComponent->toHtml() : 'empty';
    }
}
