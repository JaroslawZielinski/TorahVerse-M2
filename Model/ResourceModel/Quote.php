<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model\ResourceModel;

use ITZielArt\TorahVerse\Api\Data\QuoteInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Quote extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('torahverse_quotes', QuoteInterface::QUOTE_ID);
    }
}
