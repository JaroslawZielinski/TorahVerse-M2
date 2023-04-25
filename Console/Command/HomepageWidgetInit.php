<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Console\Command;

use JaroslawZielinski\TorahVerse\Model\Cms\HomepageWidgetInit as HomepageWidgetInitModel;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HomepageWidgetInit extends Command
{
    public const THEME_NAME = 'theme';
    /**
     * @var array
     */
    private $messages;
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var HomepageWidgetInitModel
     */
    private $homepageWidgetInit;

    /**
     * @inheirtDoc
     */
    public function __construct(
        LoggerInterface $logger,
        HomepageWidgetInitModel $homepageWidgetInit
    ) {
        $this->messages = [];
        $this->logger = $logger;
        $this->homepageWidgetInit = $homepageWidgetInit;
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('torahverse:homepage-widget:init');
        $this->setDescription('JaroslawZielinski TorahVerse Homepage widget init');
        $this->addArgument(self::THEME_NAME, InputArgument::REQUIRED, (string)__('Theme Name'));
    }

    private function displayMessages(OutputInterface $output): bool
    {
        foreach ($this->messages as $message) {
            $output->writeln($message);
        }
        return true;
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
            $theme = $input->getArgument(self::THEME_NAME);
            $this->homepageWidgetInit->execute($theme);
        } catch (\Exception $e) {
            $message = sprintf(
                '<fg=red;options=bold>Something went wrong</>: <fg=white>\'%s\'</>: <fg=yellow>%s</>.',
                $e->getMessage(),
                $e->getTraceAsString()
            );
            $this->logger->error($e->getMessage(), $e->getTrace());
            $output->writeln($message);
            return true;
        }
        return $this->displayMessages($output);
    }
}
