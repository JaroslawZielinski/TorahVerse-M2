<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface SliderInterface extends ExtensibleDataInterface
{
    public const SLIDER_ID = 'slider_id';
    public const NAME = 'name';
    public const CONFIGURATION = 'configuration';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * @return ?int
     */
    public function getSliderId();

    /**
     * @param ?int $sliderId
     * @return SliderInterface
     */
    public function setSliderId($sliderId): self;

    /**
     * @return ?string
     */
    public function getName(): ?string;

    /**
     * @param ?string $name
     * @return SliderInterface
     */
    public function setName(?string $name): self;

    /**
     * @return ?string
     */
    public function getConfiguration(): ?string;

    /**
     * @param ?string $configuration
     * @return SliderInterface
     */
    public function setConfiguration(?string $configuration): self;

    /**
     * @return ?string
     */
    public function getCreatedAt(): ?string;

    /**
     * @param ?string $createdAt
     * @return SliderInterface
     */
    public function setCreatedAt(?string $createdAt): self;

    /**
     * @return ?string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param ?string $updatedAt
     * @return SliderInterface
     */
    public function setUpdatedAt(?string $updatedAt): self;
    /**
     * @return \ITZielArt\TorahVerse\Api\Data\SliderExtensionInterface|null
     */
    public function getExtensionAttributes();
    /**
     * @param \ITZielArt\TorahVerse\Api\Data\SliderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \ITZielArt\TorahVerse\Api\Data\SliderExtensionInterface $extensionAttributes
    );
}
