<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Console\Command;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Translations\Resources;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Helper\ProgressBar;
use JaroslawZielinski\TorahVerse\Model\Console\WarmCache;

class CacheWarm extends Command
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
     * @var Torah
     */
    private $torah;

    /**
     * @var ProgressBar
     */
    private $progressBar;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @inheirtDoc
     */
    public function __construct(
        WarmCache $warmCache,
        LoggerInterface $logger,
        TorahFactory $torahFactory
    ) {
        $this->messages = [];
        $this->warmCache = $warmCache;
        $this->logger = $logger;
        $this->torah = $torahFactory->create(['cache' => true]);
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('torah:cache:warm');
        $this->setDescription('JaroslawZielinski Torah cache warm');
        $this->addArgument(self::TRANSLATION, InputArgument::REQUIRED, (string)__('Translation'));
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
        $this->output = $output;
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
            throw new \Exception(sprintf((string)__('Use one of the following available translations:
%s'), $message));
            }
            $this->warmCache->execute(
                $translation,
                [$this, 'start'],
                [$this, 'iteration'],
                [$this, 'end']
            );
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

    public function start(int $max): void
    {
        $consoleOutput = new ConsoleOutput();
        $this->progressBar = new ProgressBar($consoleOutput, $max);
        $format = 'very_verbose';
        $this->progressBar->setFormat($format);
        // Start the progress bar
        $this->progressBar->start();
    }

    public function iteration(): void
    {
        $this->progressBar->advance();
    }

    public function end(): void
    {
        $this->progressBar->finish();
        $this->output->writeln('');
    }
}
