<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Block\Edit\Quote;

use ITZielArt\TorahVerse\Api\QuoteRepositoryInterface;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class GenericButton
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var QuoteRepositoryInterface
     */
    protected $quoteRepository;

    /**
     */
    public function __construct(
        Context $context,
        QuoteRepositoryInterface $quoteRepository
    ) {
        $this->context = $context;
        $this->quoteRepository = $quoteRepository;
    }

    public function getQuoteId(): ?int
    {
        try {
            return (int)$this->quoteRepository->get(
                (int)$this->context->getRequest()->getParam('quote_id')
            )->getQuoteId();
        } catch (NoSuchEntityException|LocalizedException $e) {
        }
        return null;
    }

    public function getUrl(string $route = '', array $params = []): string
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
