<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface ColourInterface extends ExtensibleDataInterface
{
    public const NOCOLOR = 'no_color';
    public const COLOUR_ID = 'colour_id';
    public const COLOUR_VALUE = 'colour_value';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * @return ?int
     */
    public function getColourId();

    /**
     * @param ?int $colourId
     * @return ColourInterface
     */
    public function setColourId($colourId): self;

    /**
     * @return ?string
     */
    public function getColourValue(): ?string;

    /**
     * @param ?string $colourValue
     * @return ColourInterface
     */
    public function setColourValue(?string $colourValue): self;

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
     * @return \ITZielArt\TorahVerse\Api\Data\ColourExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \ITZielArt\TorahVerse\Api\Data\ColourExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \ITZielArt\TorahVerse\Api\Data\ColourExtensionInterface $extensionAttributes
    );
}
