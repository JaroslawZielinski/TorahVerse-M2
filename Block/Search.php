<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Verses\Translation as TranslationOptions;

class Search extends Template
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
        $this->setTemplate('JaroslawZielinski_TorahVerse::search.phtml');
        parent::_construct();
    }

    public function getTranslations(): array
    {
        return $this->translationOptions->toOptionArray();
    }
}
