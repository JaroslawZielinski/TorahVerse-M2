<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Controller;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\Request\Http;
use Magento\Framework\App\RequestInterface;

abstract class Ajax extends Action
{
    /**
     * @var JsonFactory
     */
    protected $resultJsonFactory;

    /**
     * @inheritDoc
     */
    public function __construct(
        JsonFactory $resultJsonFactory,
        Context $context
    ) {
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
            ]);
        }
        return $result->setData($data);
    }
}
