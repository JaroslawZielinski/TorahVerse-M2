<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Data;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use Magento\Framework\Api\AbstractExtensibleObject;

class Group extends AbstractExtensibleObject implements GroupInterface
{
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
    public function setGroupId($groupId): GroupInterface
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
    public function setCode(?string $code): GroupInterface
    {
        return $this->setData(self::CODE, $code);
    }

    /**
     * @inheritDoc
     */
    public function getName(): ?string
    {
        return $this->_get(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName(?string $name): GroupInterface
    {
        return $this->setData(self::NAME, $name);
    }

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
    public function setColourId($colourId): GroupInterface
    {
        return $this->setData(self::COLOUR_ID, $colourId);
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
    public function setCreatedAt(?string $createdAt): GroupInterface
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
    public function setUpdatedAt(?string $updatedAt): GroupInterface
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
        \ITZielArt\TorahVerse\Api\Data\GroupExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
