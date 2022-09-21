<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    public const CONFIG_PATH_MODULE_ENABLE = 'itzielart_torahverse/general/enable';
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_MODULE_ENABLE);
    }
}
