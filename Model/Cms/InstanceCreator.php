<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Cms;

use Laminas\Stdlib\Parameters;
use Magento\Framework\App\Area;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\State;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Registry;
use Magento\Widget\Model\Widget\Instance;
use JaroslawZielinski\TorahVerse\Model\Cms\InstanceCreator\Save;

class InstanceCreator
{
    /**
     * @var State
     */
    private $state;
    /**
     * @var Save
     */
    private $instanceSave;
    /**
     * @var Registry
     */
    private $coreRegistry;

    public function __construct(
        State $state,
        Registry $coreRegistry
    ) {
        $this->state = $state;
        $this->coreRegistry = $coreRegistry;
        try {
            $this->state->getAreaCode();
        } catch (LocalizedException $e) {
            $this->state->setAreaCode(Area::AREA_ADMINHTML);
        }
        $this->instanceSave = ObjectManager::getInstance()->get(Save::class);
    }

    public function execute(
        string $title,
        string $themeId,
        int $sortOrder,
        $store,
        array $instanceParameters = [],
        array $instance = [],
        string $code = 'cms_static_block'
    ): Instance {
        /** @var RequestInterface $request */
        $request = $this->instanceSave->getRequest();
        $request->setParams([
            'code' => $code,
            'instance_id' => null,
            'theme_id' => $themeId
        ]);
        $post = new Parameters([
            'title' => $title,
            'sort_order' => $sortOrder,
            'store_ids' => is_array($store) ? $store : [(int)$store],
            'parameters' => $instanceParameters,
            'widget_instance' => $instance
        ]);
        $request->setPost($post);
        $this->instanceSave->execute();
        return $this->coreRegistry->registry('current_widget_instance');
    }
}
