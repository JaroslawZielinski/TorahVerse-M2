<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface GroupInterface extends ExtensibleDataInterface
{
    public const GROUP_ID = 'group_id';
    public const CODE = 'code';
    public const NAME = 'name';
    public const COLOUR_ID = 'colour_id';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * @return ?int
     */
    public function getGroupId();

    /**
     * @param ?int $groupId
     * @return GroupInterface
     */
    public function setGroupId($groupId): self;

    /**
     * @return ?string
     */
    public function getCode(): ?string;

    /**
     * @param ?string $code
     * @return GroupInterface
     */
    public function setCode(?string $code): self;

    /**
     * @return ?string
     */
    public function getName(): ?string;

    /**
     * @param ?string $name
     * @return GroupInterface
     */
    public function setName(?string $name): self;

    /**
     * @return ?int
     */
    public function getColourId();

    /**
     * @param ?int $colourId
     * @return GroupInterface
     */
    public function setColourId($colourId): self;

    /**
     * @return ?string
     */
    public function getCreatedAt(): ?string;

    /**
     * @param ?string $createdAt
     * @return ColourInterface
     */
    public function setCreatedAt(?string $createdAt): self;

    /**
     * @return ?string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param ?string $updatedAt
     * @return ColourInterface
     */
    public function setUpdatedAt(?string $updatedAt): self;

    /**
     * @return \ITZielArt\TorahVerse\Api\Data\GroupExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \ITZielArt\TorahVerse\Api\Data\GroupExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \ITZielArt\TorahVerse\Api\Data\GroupExtensionInterface $extensionAttributes
    );
}
