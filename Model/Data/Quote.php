<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Data;

use JaroslawZielinski\TorahVerse\Api\Data\QuoteInterface;
use Magento\Framework\Api\AbstractExtensibleObject;

class Quote extends AbstractExtensibleObject implements QuoteInterface
{
    /**
     * @inheritDoc
     */
    public function getQuoteId()
    {
        return $this->_get(QuoteInterface::QUOTE_ID);
    }

    /**
     * @inheritDoc
     */
    public function setQuoteId($quoteId): QuoteInterface
    {
        return $this->setData(QuoteInterface::QUOTE_ID, $quoteId);
    }

    /**
     * @inheritDoc
     */
    public function getGroupId()
    {
        return $this->_get(self::GROUP_ID);
    }

    /**
     * @inheritDoc
     */
    public function setGroupId($groupId): QuoteInterface
    {
        return $this->setData(self::GROUP_ID, $groupId);
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
    public function setCode(?string $code): QuoteInterface
    {
        return $this->setData(self::CODE, $code);
    }

    /**
     * @inheritDoc
     */
    public function getName(): ?string
    {
        return $this->_get(QuoteInterface::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName(?string $name): QuoteInterface
    {
        return $this->setData(QuoteInterface::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getContent(): ?string
    {
        return $this->_get(QuoteInterface::CONTENT);
    }

    /**
     * @inheritDoc
     */
    public function setContent(?string $content): QuoteInterface
    {
        return $this->setData(QuoteInterface::CONTENT, $content);
    }

    /**
     * @inheritDoc
     */
    public function getAuthor(): ?string
    {
        return $this->_get(QuoteInterface::AUTHOR);
    }

    /**
     * @inheritDoc
     */
    public function setAuthor(?string $author): QuoteInterface
    {
        return $this->setData(QuoteInterface::AUTHOR, $author);
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): ?string
    {
        return $this->_get(QuoteInterface::DESCRIPTION);
    }

    /**
     * @inheritDoc
     */
    public function setDescription(?string $description): QuoteInterface
    {
        return $this->setData(QuoteInterface::DESCRIPTION, $description);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return $this->_get(QuoteInterface::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(?string $createdAt): QuoteInterface
    {
        return $this->setData(QuoteInterface::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): ?string
    {
        return $this->_get(QuoteInterface::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(?string $updatedAt): QuoteInterface
    {
        return $this->setData(QuoteInterface::UPDATED_AT, $updatedAt);
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
        \JaroslawZielinski\TorahVerse\Api\Data\QuoteExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
