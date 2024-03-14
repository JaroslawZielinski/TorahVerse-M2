<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml\Siglum;

use JaroslawZielinski\TorahVerse\Controller\Adminhtml\Ajax;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\TorahVerse\Model\TorahFactory;
use Magento\Backend\Block\Admin\Formkey;
use JaroslawZielinski\TorahVerse\Model\Config;

class Preview extends Ajax
{
    /**
     * @var Torah
     */
    private $torah;

    /**
     * @var Config
     */
    private $config;

    /**
     * @inheritDoc
     */
    public function __construct(
        TorahFactory $torahFactory,
        Config $config,
        FormKey $formKey,
        JsonFactory $resultJsonFactory,
        Context $context
    ) {
        $this->torah = $torahFactory->create();
        $this->config = $config;
        parent::__construct($formKey, $resultJsonFactory, $context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        try {
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
            $language = $this->config->getInternalizationLanguage();
            $text = $this->torah->getTextBySiglum($siglum, $language);
            if (!empty($text)) {
                $content = $text->getOrdered();
                $description = $text->getDescription();
                $previewText = <<<EOT
{$content}

{$description}
EOT;
            } else {
                $previewText = implode(<<<EOT

EOT, $this->torah->getErrors());
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
