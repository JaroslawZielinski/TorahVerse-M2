<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Block\Edit\Group;

use ITZielArt\TorahVerse\Api\GroupRepositoryInterface;
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
     * @var GroupRepositoryInterface
     */
    protected $groupRepository;

    /**
     */
    public function __construct(
        Context $context,
        GroupRepositoryInterface $groupRepository
    ) {
        $this->context = $context;
        $this->groupRepository = $groupRepository;
    }

    public function getGroupId(): ?int
    {
        try {
            return (int)$this->groupRepository->get(
                (int)$this->context->getRequest()->getParam('group_id')
            )->getGroupId();
        } catch (NoSuchEntityException|LocalizedException $e) {
        }
        return null;
    }

    public function getUrl(string $route = '', array $params = []): string
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
