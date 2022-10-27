<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel;

use ITZielArt\TorahVerse\Api\Data\ColourInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Colour extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_colours', ColourInterface::COLOUR_ID);
    }
}
