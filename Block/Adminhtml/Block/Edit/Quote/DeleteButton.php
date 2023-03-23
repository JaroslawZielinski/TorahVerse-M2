<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Block\Adminhtml\Block\Edit\Quote;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class DeleteButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @inheritDoc
     */
    public function getButtonData(): array
    {
        $data = [];
        if ($this->getQuoteId()) {
            $data = [
                'label' => __('Delete Quote'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                    'Are you sure you want to do this?'
                ) . '\', \'' . $this->getDeleteUrl() . '\', {"data": {}})',
                'sort_order' => 20,
            ];
        }
        return $data;
    }

    public function getDeleteUrl(): string
    {
        return $this->getUrl('*/*/delete', ['quote_id' => $this->getQuoteId()]);
    }
}
