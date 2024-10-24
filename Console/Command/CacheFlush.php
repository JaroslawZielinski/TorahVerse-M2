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

    public const LIST = 'list';

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
        $translation = $input->getArgument(self::TRANSLATION) ?? null;
        $list = $input->getOption(self::LIST);
        if ($list) {
            $this->listTranslations($output);
        } else if ($translation && !$list) {
            $availableTranslations = array_keys(Resources::TORAH_TRANSLATIONS);
            if (!in_array($translation, $availableTranslations)) {
                throw new \Exception((string)__('Unkown translation: %1', $translation));
            }
            $result = $this->repository->delete($translation);
            $resultMsg = sprintf((string)__('For \'%s\' cache flushed with result \'%s\''), $translation, $result);
            $output->writeln($resultMsg);
        } else {
            throw new \Exception(sprintf((string)__('Translation parameter empty.')));
        }
        return $this->displayMessages($output);
    }
}
