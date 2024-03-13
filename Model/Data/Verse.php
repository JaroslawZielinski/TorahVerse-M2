<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Data;

use JaroslawZielinski\TorahVerse\Api\Data\VerseInterface;
use Magento\Framework\Api\AbstractExtensibleObject;

class Verse extends AbstractExtensibleObject implements VerseInterface
{
    /**
     * @inheritDoc
     */
    public function getVerseId()
    {
        return $this->_get(VerseInterface::VERSE_ID);
    }

    /**
     * @inheritDoc
     */
    public function setVerseId($verseId): VerseInterface
    {
        return $this->setData(VerseInterface::VERSE_ID, $verseId);
    }

    /**
     * @inheritDoc
     */
    public function getGroupId()
    {
        return $this->_get(VerseInterface::GROUP_ID);
    }

    /**
     * @inheritDoc
     */
    public function setGroupId($groupId): VerseInterface
    {
        return $this->setData(VerseInterface::GROUP_ID, $groupId);
    }

    /**
     * @inheritDoc
     */
    public function getCode(): ?string
    {
        return $this->_get(self::CODE);
    }

    /**
     * @inheritDoc
     */
    public function setCode(?string $code): VerseInterface
    {
        return $this->setData(self::CODE, $code);
    }

    /**
     * @inheritDoc
     */
    public function getName(): ?string
    {
        return $this->_get(VerseInterface::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName(?string $name): VerseInterface
    {
        return $this->setData(VerseInterface::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getSiglum(): ?string
    {
        return $this->_get(VerseInterface::SIGLUM);
    }

    /**
     * @inheritDoc
     */
    public function setSiglum(?string $siglum): VerseInterface
    {
        return $this->setData(VerseInterface::SIGLUM, $siglum);
    }

    /**
     * @inheritDoc
     */
    public function getTranslation(): ?string
    {
        return $this->_get(VerseInterface::TRANSLATION);
    }

    /**
     * @inheritDoc
     */
    public function setTranslation(?string $translation): VerseInterface
    {
        return $this->setData(VerseInterface::TRANSLATION, $translation);
    }

    /**
     * @inheritDoc
     */
    public function getContent(): ?string
    {
        return $this->_get(VerseInterface::CONTENT);
    }

    /**
     * @inheritDoc
     */
    public function setContent(?string $content): VerseInterface
    {
        return $this->setData(VerseInterface::CONTENT, $content);
    }

    /**
     * @inheritDoc
     */
    public function getUnordered(): ?string
    {
        return $this->_get(VerseInterface::UNORDERED);
    }

    /**
     * @inheritDoc
     */
    public function setUnordered(?string $unordered): VerseInterface
    {
        return $this->setData(VerseInterface::UNORDERED, $unordered);
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): ?string
    {
        return $this->_get(VerseInterface::DESCRIPTION);
    }

    /**
     * @inheritDoc
     */
    public function setDescription(?string $description): VerseInterface
    {
        return $this->setData(VerseInterface::DESCRIPTION, $description);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return $this->_get(VerseInterface::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(?string $createdAt): VerseInterface
    {
        return $this->setData(VerseInterface::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): ?string
    {
        return $this->_get(VerseInterface::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(?string $updatedAt): VerseInterface
    {
        return $this->setData(VerseInterface::UPDATED_AT, $updatedAt);
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inheritDoc
     */
    public function setExtensionAttributes(
        \JaroslawZielinski\TorahVerse\Api\Data\VerseExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
