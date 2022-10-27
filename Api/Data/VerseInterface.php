<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface VerseInterface extends ExtensibleDataInterface
{
    public const VERSE_ID = 'verse_id';
    public const GROUP_ID = 'group_id';
    public const NAME = 'name';
    public const SIGLUM = 'siglum';
    public const TRANSLATION = 'translation';
    public const CONTENT = 'content';
    public const UNORDERED = 'unordered';
    public const DESCRIPTION = 'description';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * @return ?int
     */
    public function getVerseId();

    /**
     * @param ?int $verseId
     * @return VerseInterface
     */
    public function setVerseId($verseId): self;

    /**
     * @return ?int
     */
    public function getGroupId();

    /**
     * @param ?int $groupId
     * @return VerseInterface
     */
    public function setGroupId($groupId): self;

    /**
     * @return ?string
     */
    public function getName(): ?string;

    /**
     * @param ?string $name
     * @return VerseInterface
     */
    public function setName(?string $name): self;

    /**
     * @return ?string
     */
    public function getSiglum(): ?string;

    /**
     * @param ?string $siglum
     * @return VerseInterface
     */
    public function setSiglum(?string $siglum): self;

    /**
     * @return ?string
     */
    public function getTranslation(): ?string;

    /**
     * @param ?string $translation
     * @return VerseInterface
     */
    public function setTranslation(?string $translation): self;

    /**
     * @return ?string
     */
    public function getContent(): ?string;

    /**
     * @param ?string $content
     * @return VerseInterface
     */
    public function setContent(?string $content): self;

    /**
     * @return ?string
     */
    public function getUnordered(): ?string;

    /**
     * @param ?string $unordered
     * @return VerseInterface
     */
    public function setUnordered(?string $unordered): self;

    /**
     * @return ?string
     */
    public function getDescription(): ?string;

    /**
     * @param ?string $description
     * @return VerseInterface
     */
    public function setDescription(?string $description): self;

    /**
     * @return ?string
     */
    public function getCreatedAt(): ?string;

    /**
     * @param ?string $createdAt
     * @return VerseInterface
     */
    public function setCreatedAt(?string $createdAt): self;

    /**
     * @return ?string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param ?string $updatedAt
     * @return VerseInterface
     */
    public function setUpdatedAt(?string $updatedAt): self;

    /**
     * @return \ITZielArt\TorahVerse\Api\Data\VerseExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \ITZielArt\TorahVerse\Api\Data\VerseExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \ITZielArt\TorahVerse\Api\Data\VerseExtensionInterface $extensionAttributes
    );
}
