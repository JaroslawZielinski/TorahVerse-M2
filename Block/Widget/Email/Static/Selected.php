<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Block\Widget\Email\Static;

/**
 * @method setLanguage(string $language): self
 * @method getEn(): string
 * @method getPl(): string
 */
class Selected extends \JaroslawZielinski\TorahVerse\Block\Widget\Static\Selected
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
        $language = explode('_', $this->config->getStoreLocale());
        $lang = $language[0];
        $siglum = $this->getSiglum();
        switch ($lang) {
            default:
            case 'en':
                $translation = $this->getEn();
                $this->setLanguage('en');
                break;
            case 'pl':
                $translation = $this->getPl();
                $this->setLanguage('pl');
                break;
        }
        $siglumParts = explode('/', $siglum);
        $siglumParts[0] = $translation;
        $this->setSiglum(implode('/', $siglumParts));
        return parent::getItems($groupsArray);
    }
}
