<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model;

use JaroslawZielinski\Torah\Bible\Torah;
use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\Torah\Bible\Service;
use Psr\Log\LoggerInterface;
use JaroslawZielinski\TorahVerse\Model\Config;
use JaroslawZielinski\TorahVerse\Api\TorahRepositoryInterface;
use JaroslawZielinski\Torah\Bible\TorahValidator;

class TorahFactory
{
    /**
     * @var TorahRepositoryInterface
     */
    private $repository;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     */
    public function __construct(
        TorahRepositoryInterface $repository,
        Config $config,
        LoggerInterface $logger
    ) {
        $this->repository = $repository;
        $this->config = $config;
        $this->logger = $logger;
    }
    
    /**
     */
    public function create(array $override = []): Torah
    {
        $onlineClient = new Service\Online\Client($this->logger, new GuzzleClient());
        $offlineClient = new Service\Offline\Client($this->repository);
        $options = array_merge(
            ['cache' => $this->config->isTorahCacheEnabled()],
            $override
        );
        return new Torah(
            new TorahValidator(),
            new Service($onlineClient, $offlineClient),
            $options
        );
    }
}
