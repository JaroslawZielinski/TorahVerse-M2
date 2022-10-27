<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\Data;

use ITZielArt\TorahVerse\Api\Data\SliderInterface;
use Magento\Framework\Api\AbstractExtensibleObject;

class Slider extends AbstractExtensibleObject implements SliderInterface
{
    /**
     * @inheritDoc
     */
    public function getSliderId()
    {
        return $this->_get(SliderInterface::SLIDER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setSliderId($sliderId): SliderInterface
    {
        return $this->setData(SliderInterface::SLIDER_ID, $sliderId);
    }

    /**
     * @inheritDoc
     */
    public function getName(): ?string
    {
        return $this->_get(SliderInterface::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName(?string $name): SliderInterface
    {
        return $this->setData(SliderInterface::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getCode(): ?string
    {
        return $this->_get(SliderInterface::CODE);
    }

    /**
     * @inheritDoc
     */
    public function setCode(?string $code): SliderInterface
    {
        return $this->setData(SliderInterface::CODE, $code);
    }

    /**
     * @inheritDoc
     */
    public function getConfiguration(): ?string
    {
        return $this->_get(SliderInterface::CONFIGURATION);
    }

    /**
     * @inheritDoc
     */
    public function setConfiguration(?string $configuration): SliderInterface
    {
        return $this->setData(SliderInterface::CONFIGURATION, $configuration);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return $this->_get(SliderInterface::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(?string $createdAt): SliderInterface
    {
        return $this->setData(SliderInterface::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): ?string
    {
        return $this->_get(SliderInterface::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(?string $updatedAt): SliderInterface
    {
        return $this->setData(SliderInterface::UPDATED_AT, $updatedAt);
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
        \ITZielArt\TorahVerse\Api\Data\SliderExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
