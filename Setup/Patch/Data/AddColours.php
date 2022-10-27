<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Setup\Patch\Data;

use ITZielArt\TorahVerse\Api\ColourRepositoryInterface;
use ITZielArt\TorahVerse\Api\Data\ColourInterface;
use ITZielArt\TorahVerse\Model\ColourFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddColours implements DataPatchInterface
{
    private const PREDEFINED_COLOURS = [
        ColourInterface::NOCOLOR,
        '#df3020',
        '#df7020',
        '#9fdf20',
        '#20df50',
        '#20bfdf',
        '#3020df',
        '#df20df'
    ];
    /**
     * @var ColourFactory
     */
    private $colorFactory;
    /**
     * @var ColourRepositoryInterface
     */
    private $colourRepository;

    public function __construct(
        ColourFactory $colorFactory,
        ColourRepositoryInterface $colourRepository
    ) {
        $this->colorFactory = $colorFactory;
        $this->colourRepository = $colourRepository;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritDoc
     * @throws LocalizedException
     */
    public function apply()
    {
        foreach (self::PREDEFINED_COLOURS as $predefinedColour) {
            $colour = $this->colorFactory->create();
            $colourData = $colour->getDataModel();
            $colourData->setColourValue($predefinedColour);
            $this->colourRepository->save($colourData);
        }
    }
}
