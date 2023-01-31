<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Controller\Siglum;

use ITZielArt\TorahVerse\Controller\Ajax;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use GuzzleHttp\Client;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use Psr\Log\LoggerInterface;

class Preview extends Ajax
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @inheritDoc
     */
    public function __construct(
        LoggerInterface $logger,
        JsonFactory $resultJsonFactory,
        Context $context
    ) {
        $this->logger = $logger;
        parent::__construct($resultJsonFactory, $context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        try {
            $client = new Service\Client($this->logger, new Client());
            $torah = new Torah(new TorahValidator(), new Service($client));
            $request = $this->getRequest();
            $translationParameter = $request->getParam('translation');
            if (empty($translationParameter)) {
                throw new \Exception('Translation is not set!');
            }
            $siglumParameter = $request->getParam('siglum');
            if (empty(trim($siglumParameter))) {
                throw new \Exception('String is empty!');
            }
            $siglum =  SiglumFactory::createFromTranslationAndString($translationParameter, $siglumParameter);
            $text = $torah->getTextBySiglum($siglum);
            if (!empty($text)) {
                $content = $text->getOrdered();
                $description = $text->getDescription();
                $previewText = <<<EOT
{$content}

{$description}
EOT;
            } else {
                $previewText = implode(<<<EOT

EOT, $torah->getErrors());
            }
            $data['status'] = 'ok';
        } catch (\Exception $e) {
            $previewText = $e->getMessage();
            $data['status'] = 'error';
        }
        $data['result'] = $previewText;
        return $this->ajax($data);
    }
}
