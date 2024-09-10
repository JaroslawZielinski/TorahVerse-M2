<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\BibleTools\View\Element;

use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\TorahVerse\Model\Cache\Progress as ModelProgress;
use Magento\Framework\View\Element\Context;
use Magento\Framework\View\Element\Html\Select;

/**
 * @method getAfterHtml(): string
 */
class Translations extends Select
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
        array $data = []
    ) {
        $this->modelProgress = $modelProgress;
        parent::__construct($context, $data);
        $this->fetchTranslations();
    }

    private function purifyHtml(string $label): string
    {
        return str_replace('&apos;', '\'', $label);
    }

    /**
     * @inheritDoc
     */
    public function setOptions($options)
    {
        parent::setOptions([
            ['value' => null, 'label' => __('Choose translation')],
        ]);
        foreach ($options as $key => $value) {
            $label = $this->purifyHtml($value['label']);
            $percentage = (int)((float)$value['percentage'] + 0.5);
            $indexed = $value['indexed'];
            $maxVerse = $value['maxVerse'];
            if ($percentage < 100) {
                $this->addOption($key, __('%1 <------ NOT INDEXED!!! [%2% - (%3/%4)]', $label, $percentage, $indexed, $maxVerse));
            } else {
                $this->addOption($key, __('%1', $label));
            }
        }
        return $this;
    }

    private function fetchTranslations(): void
    {
        $translations = [];
        foreach(Resources::TORAH_TRANSLATIONS as $translationCode => $label) {
            $indexed = $this->modelProgress->getCachedVerses($translationCode);
            $maxVerse = $this->modelProgress->getMaxVerses($translationCode);
            $percentage = ($indexed * 100.0) / $maxVerse;
            $translations[$translationCode] = [
                'label' => $label,
                'percentage' => $percentage,
                'indexed' => $indexed,
                'maxVerse' => $maxVerse
            ];
        }
        $this->setOptions($translations);
    }

    /**
     * @inheritDoc
     */
    protected function _afterToHtml($html): string
    {
        return $html . $this->getAfterHtml();
    }
}
