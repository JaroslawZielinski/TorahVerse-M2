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

    public const LIST = 'list';

    /**
     * @var array
     */
    private $messages;

    /**
     * @var WarmCache
     */
    private $warmCache;

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
        $this->addOption(self::LIST,'l', $mode = null, (string)__('see translation codes avaiable.'));
        $this->addArgument(self::TRANSLATION, InputArgument::OPTIONAL, (string)__('translation code'));
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

    private function listTranslations(OutputInterface $output): void
    {
        foreach (Resources::TORAH_TRANSLATIONS as $code => $label) {
            $output->writeln(
                (string)__('%1 <fg=yellow;options=bold>%2</>', $code, str_replace(['&apos;'], ['\''], $label))
            );
        }
    }

    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;
        $translation = $input->getArgument(self::TRANSLATION) ?? null;
        $list = $input->getOption(self::LIST);
        if ($list) {
            $this->listTranslations($output);
        } else if ($translation && !$list) {
            $availableTranslations = array_keys(Resources::TORAH_TRANSLATIONS);
            if (!in_array($translation, $availableTranslations)) {
                throw new \Exception((string)__('Unkown translation: %1', $translation));
            }
            $this->warmCache->execute(
                $translation,
                [$this, 'start'],
                [$this, 'iteration'],
                [$this, 'end']
            );
        } else {
            throw new \Exception(sprintf((string)__('Translation parameter empty.')));
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
