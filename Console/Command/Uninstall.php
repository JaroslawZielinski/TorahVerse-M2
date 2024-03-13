<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Console\Command;

use JaroslawZielinski\TorahVerse\Model\ResourceModel\Verse as VerseResource;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Uninstall extends Command
{
    /**
     * @var array
     */
    private $messages;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var VerseResource
     */
    private $verseResource;

    /**
     * @inheirtDoc
     */
    public function __construct(
        LoggerInterface $logger,
        VerseResource $verseResource
    ) {
        $this->messages = [];
        $this->logger = $logger;
        $this->verseResource = $verseResource;
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('torahverse:module:uninstall');
        $this->setDescription('JaroslawZielinski TorahVerse Module Uninstall (use wisely)');
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
            $this->verseResource->unInstall();
            $this->addMessage((string)__('All changes removed successfully from db.'));
        } catch (\Exception $e) {
            $message = sprintf(
                '<fg=red;options=bold>Something went wrong</>: <fg=white>\'%s\'</>: <fg=yellow>%s</>.',
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
