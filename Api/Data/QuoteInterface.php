<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface QuoteInterface extends ExtensibleDataInterface
{
    public const QUOTE_ID = 'quote_id';

    public const GROUP_ID = 'group_id';

    public const CODE = 'code';

    public const NAME = 'name';

    public const CONTENT = 'content';

    public const AUTHOR = 'author';

    public const DESCRIPTION = 'description';

    public const DESCRIPTION2 = 'description2';

    public const DESCRIPTION3 = 'description3';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    /**
     * @return ?int
     */
    public function getQuoteId();

    /**
     * @param ?int $quoteId
     * @return QuoteInterface
     */
    public function setQuoteId($quoteId): self;

    /**
     * @return ?string
     */
    public function getCode(): ?string;

    /**
     * @param ?string $code
     * @return QuoteInterface
     */
    public function setCode(?string $code): self;

    /**
     * @return ?int
     */
    public function getGroupId();

    /**
     * @param ?int $groupId
     * @return QuoteInterface
     */
    public function setGroupId($groupId): self;

    /**
     * @return ?string
     */
    public function getName(): ?string;

    /**
     * @param ?string $name
     * @return QuoteInterface
     */
    public function setName(?string $name): self;

    /**
     * @return ?string
     */
    public function getContent(): ?string;

    /**
     * @param ?string $content
     * @return QuoteInterface
     */
    public function setContent(?string $content): self;

    /**
     * @return ?string
     */
    public function getAuthor(): ?string;

    /**
     * @param ?string $author
     * @return QuoteInterface
     */
    public function setAuthor(?string $author): self;

    /**
     * @return ?string
     */
    public function getDescription(): ?string;

    /**
     * @param ?string $description
     * @return QuoteInterface
     */
    public function setDescription(?string $description): self;

    /**
     * @return ?string
     */
    public function getDescription2(): ?string;

    /**
     * @param ?string $description
     * @return QuoteInterface
     */
    public function setDescription2(?string $description): self;

    /**
     * @return ?string
     */
    public function getDescription3(): ?string;

    /**
     * @param ?string $description
     * @return QuoteInterface
     */
    public function setDescription3(?string $description): self;

    /**
     * @return ?string
     */
    public function getCreatedAt(): ?string;

    /**
     * @param ?string $createdAt
     * @return QuoteInterface
     */
    public function setCreatedAt(?string $createdAt): self;

    /**
     * @return ?string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param ?string $updatedAt
     * @return QuoteInterface
     */
    public function setUpdatedAt(?string $updatedAt): self;

    /**
     * @return \JaroslawZielinski\TorahVerse\Api\Data\QuoteExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \JaroslawZielinski\TorahVerse\Api\Data\QuoteExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \JaroslawZielinski\TorahVerse\Api\Data\QuoteExtensionInterface $extensionAttributes
    );
}
