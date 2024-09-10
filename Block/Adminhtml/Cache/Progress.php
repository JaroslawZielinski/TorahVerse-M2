<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Adminhtml\Cache;

use JaroslawZielinski\TorahVerse\Model\Cache\Progress as ModelProgress;
use Magento\Backend\Block\Template\Context;
use JaroslawZielinski\Torah\Bible\Service\Offline\Repository;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\Directory\Helper\Data as DirectoryHelper;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use Magento\Backend\Block\Template;

/**
 * @method getTranslation(): string
 */
class Progress extends Template
{
    /**
     * @var ModelProgress
     */
    private $modelProgress;

    /**
     * @inheritDoc
     */
    public function __construct(
        ModelProgress $modelProgress,
        Context $context,
        array $data = [],
        ?JsonHelper $jsonHelper = null,
        ?DirectoryHelper $directoryHelper = null
    ) {
        $this->modelProgress = $modelProgress;
        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->setTemplate('JaroslawZielinski_TorahVerse::progress.phtml');
        parent::_construct();
    }

    /**
     */
    public function getCachedVerses(): int
    {
        $translation = $this->getTranslation();
        return $this->modelProgress->getCachedVerses($translation);
    }

    /**
     */
    public function getMaxVerses():int
    {
        $translation = $this->getTranslation();
        return $this->modelProgress->getMaxVerses($translation);
    }
}
