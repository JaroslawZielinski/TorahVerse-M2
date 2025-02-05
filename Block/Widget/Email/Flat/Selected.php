<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Widget\Email\Flat;

use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;

/**
 * @method setLanguage(string $language): self
 * @method getEn(): string
 * @method getPl(): string
 */
class Selected extends \JaroslawZielinski\TorahVerse\Block\Widget\Flat\Selected
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        parent::_construct();
        $this->setTemplate('JaroslawZielinski_TorahVerse::widget/email/slider.phtml');
    }

    /**
     * @inheritDoc
     */
    public function getItems(array $groupsArray = []): array
    {
        switch ($this->config->getInternalizationLanguage()) {
            default:
            case Language::LANGUAGE_EN:
                $translation = $this->getEn();
                $this->setLanguage('en');
            break;
            case Language::LANGUAGE_PL:
                $translation = $this->getPl();
                $this->setLanguage('pl');
                break;
        }
        $siglum = $this->getSiglum();
        $siglumParts = explode('/', $siglum);
        $siglumParts[0] = $translation;
        $this->setSiglum(implode('/', $siglumParts));
        return parent::getItems($groupsArray);
    }
}
