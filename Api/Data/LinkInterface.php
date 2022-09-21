<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface LinkInterface extends ExtensibleDataInterface
{
    public const LINK_ID = 'link_id';
    public const SLIDER_ID = 'slider_id';
    public const VERSE_ID = 'verse_id';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    /**
     * @return ?int
     */
    public function getLinkId();

    /**
     * @param ?int $linkId
     * @return LinkInterface
     */
    public function setLinkId($linkId): self;

    /**
     * @return ?int
     */
    public function getSliderId(): ?int;

    /**
     * @param ?int $sliderId
     * @return LinkInterface
     */
    public function setSliderId(?int $sliderId): self;

    /**
     * @return ?int
     */
    public function getVerseId(): ?int;

    /**
     * @param ?int $verseId
     * @return LinkInterface
     */
    public function setVerseId(?int $verseId): self;

    /**
     * @return ?string
     */
    public function getCreatedAt(): ?string;

    /**
     * @param ?string $createdAt
     * @return LinkInterface
     */
    public function setCreatedAt(?string $createdAt): self;

    /**
     * @return ?string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param ?string $updatedAt
     * @return LinkInterface
     */
    public function setUpdatedAt(?string $updatedAt): self;

    /**
     * @return \ITZielArt\TorahVerse\Api\Data\LinkExtensionInterface|null
     */
    public function getExtensionAttributes();
    /**
     * @param \ITZielArt\TorahVerse\Api\Data\LinkExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \ITZielArt\TorahVerse\Api\Data\LinkExtensionInterface $extensionAttributes
    );
}
