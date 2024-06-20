<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Block\Admin\Formkey;
use Magento\Framework\App\Request\Http;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;

abstract class Ajax extends Action
{
    /**
     * @var FormKey
     */
    private $formKey;

    /**
     * @var JsonFactory
     */
    protected $resultJsonFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        FormKey $formKey,
        JsonFactory $resultJsonFactory,
        Context $context
    ) {
        $this->formKey = $formKey;
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function ajax(array $data): Json
    {
        $result = $this->resultJsonFactory->create();
        /** @var RequestInterface|Http $request */
        $request = $this->getRequest();
        if (!$request->isAjax()) {
            return $result->setData([
                'status' => 'ERROR',
                'message' => __('It is not an ajax.'),
                'result' => __('It is not an ajax.')
            ]);
        }
        if ($request->getParam('form_key', '') !== $this->formKey->getFormKey()) {
            return $result->setData([
                'status' => 'ERROR',
                'message' => __('CSRF attack possible.'),
                'result' => __('Form is broken.')
            ]);
        }
        return $result->setData($data);
    }
}
