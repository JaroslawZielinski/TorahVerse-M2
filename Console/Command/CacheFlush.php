<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Console\Command;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use JaroslawZielinski\Torah\Bible\Service\Offline\Repository;
use JaroslawZielinski\Torah\Translations\Resources;

class CacheFlush extends Command
{
    public const TRANSLATION = 'translation';

    /**
     * @var array
     */
    private $messages;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var Repository
     */
    private $repository;

    /**
     * @inheirtDoc
     */
    public function __construct(
        LoggerInterface $logger,
        Repository $repository
    ) {
        $this->messages = [];
        $this->logger = $logger;
        $this->repository = $repository;
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('torah:cache:flush');
        $this->setDescription('JaroslawZielinski Torah cache flush');
        $this->addArgument(self::TRANSLATION, InputArgument::REQUIRED, (string)__('translation'));
    }

    private function displayMessages(OutputInterface $output): int
    {
        foreach ($this->messages as $message) {
            $output->writeln($message);
        }
        return 1;
    }

    private function addMessage(string $message, ...$args): void
    {
        $this->messages[] = sprintf($message, ...$args);
    }

    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $translation = $input->getArgument(self::TRANSLATION);
            $availableTranslations = array_keys(Resources::TORAH_TRANSLATIONS);
            if (!in_array($translation, $availableTranslations)) {
                $availableTranslationsStr = print_r($availableTranslations, true);
                $message = str_replace(['Array
(
', '
)
'], ['', ''], $availableTranslationsStr);
            throw new \Exception(sprintf((string)__('Use the following available translations:
%s'), $message));
            }
            $result = $this->repository->delete($translation);
            $resultMsg = sprintf((string)__('For \'%s\' cache flushed with result \'%s\''), $translation, $result);
            $output->writeln($resultMsg);
        } catch (\Exception $e) {
                       $message = sprintf(
                '<fg=red;options=bold>Something went wrong</>: <fg=white>\'%s\'</>: <fg=yellow>
%s</>.',
                $e->getMessage(),
                $e->getTraceAsString()
            );
            $this->logger->error($e->getMessage(), $e->getTrace());
            $output->writeln($message);
            return 1;
        }
        return $this->displayMessages($output);
    }
}
