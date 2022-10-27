<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Data;

use ITZielArt\TorahVerse\Api\Data\ColourInterface;
use Magento\Framework\Api\AbstractExtensibleObject;

class Colour extends AbstractExtensibleObject implements ColourInterface
{
    /**
     * @inheritDoc
     */
    public function getColourId()
    {
        return $this->_get(self::COLOUR_ID);
    }

    /**
     * @inheritDoc
     */
    public function setColourId($colourId): ColourInterface
    {
        return $this->setData(self::COLOUR_ID, $colourId);
    }

    /**
     * @inheritDoc
     */
    public function getColourValue(): ?string
    {
        return $this->_get(self::COLOUR_VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setColourValue(?string $colourValue): ColourInterface
    {
        return $this->setData(self::COLOUR_VALUE, $colourValue);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(?string $createdAt): ColourInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): ?string
    {
        return $this->_get(self::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(?string $updatedAt): ColourInterface
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
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
        \ITZielArt\TorahVerse\Api\Data\ColourExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
