<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Block\Edit\Verse;

use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
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
     * @var VerseRepositoryInterface
     */
    protected $verseRepository;

    /**
     */
    public function __construct(
        Context $context,
        VerseRepositoryInterface $verseRepository
    ) {
        $this->context = $context;
        $this->verseRepository = $verseRepository;
    }

    public function getVerseId(): ?int
    {
        try {
            return (int)$this->verseRepository->get(
                (int)$this->context->getRequest()->getParam('verse_id')
            )->getVerseId();
        } catch (NoSuchEntityException|LocalizedException $e) {
        }
        return null;
    }

    public function getUrl(string $route = '', array $params = []): string
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
