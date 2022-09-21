<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use ITZielArt\TorahVerse\Api\Data\LinkInterface;

class Link extends AbstractExtensibleObject implements LinkInterface
{
    /**
     * @inheritDoc
     */
    public function getLinkId()
    {
        return $this->_get(LinkInterface::LINK_ID);
    }

    /**
     * @inheritDoc
     */
    public function setLinkId($linkId): LinkInterface
    {
        return $this->setData(LinkInterface::LINK_ID, $linkId);
    }

    /**
     * @inheritDoc
     */
    public function getSliderId(): ?int
    {
        return $this->_get(LinkInterface::SLIDER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setSliderId(?int $sliderId): LinkInterface
    {
        return $this->setData(LinkInterface::SLIDER_ID, $sliderId);
    }

    /**
     * @inheritDoc
     */
    public function getVerseId(): ?int
    {
        return $this->_get(LinkInterface::VERSE_ID);
    }

    /**
     * @inheritDoc
     */
    public function setVerseId(?int $verseId): LinkInterface
    {
        return $this->setData(LinkInterface::VERSE_ID, $verseId);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return $this->_get(LinkInterface::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(?string $createdAt): LinkInterface
    {
        return $this->setData(LinkInterface::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): ?string
    {
        return $this->_get(LinkInterface::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(?string $updatedAt): LinkInterface
    {
        return $this->setData(LinkInterface::UPDATED_AT, $updatedAt);
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
        \ITZielArt\TorahVerse\Api\Data\LinkExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
