<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Cms\InstanceCreator;

use Magento\Framework\App\ResponseInterface;

class Save extends \Magento\Widget\Controller\Adminhtml\Widget\Instance\Save
{
    /**
     * @inheritDoc
     */
    protected function _redirect($path, $arguments = []): ?ResponseInterface
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        $this->_coreRegistry->unregister('current_widget_instance');
        parent::execute();
    }
}
