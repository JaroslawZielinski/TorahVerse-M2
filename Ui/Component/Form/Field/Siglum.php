<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Form\Field;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Form\Field;
use JaroslawZielinski\TorahVerse\Model\Config;

class Siglum extends Field
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritDoc
     */
    public function __construct(
        Config $config,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * @inheritDoc
     */
    public function getConfiguration(): array
    {
        $configuration = parent::getConfiguration();
        // inject admin panel configuration to ui component js configuration
        return $configuration;
    }
}
