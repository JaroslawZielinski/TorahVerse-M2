<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Cms\Api\Data\BlockInterface;
use Magento\Cms\Api\GetBlockByIdentifierInterface;
use Magento\Cms\Model\Block as BlockModel;
use Magento\Cms\Model\BlockFactory;
use Magento\Cms\Model\ResourceModel\Block;
use Magento\Framework\Exception\NoSuchEntityException;

class DictaIgnacyLoyolaBlock implements DataPatchInterface
{
    /**
     * @var GetBlockByIdentifierInterface
     */
    private $getBlockByIdentifier;

    /**
     * @var BlockFactory
     */
    private $blockFactory;

    /**
     * @var Block
     */
    private $blockResource;

    /**
     */
    public function __construct(
        GetBlockByIdentifierInterface $getBlockByIdentifier,
        BlockFactory $blockFactory,
        Block $blockResource
    ) {
        $this->getBlockByIdentifier = $getBlockByIdentifier;
        $this->blockFactory = $blockFactory;
        $this->blockResource = $blockResource;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies(): array
    {
        return [
            DictaIgnacyLoyola::class
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function apply(): void
    {
        $title = 'Dicta Ignacy Loyola';
        $identifier = 'dicta-ignacy-loyola';
        $content = <<<EOT
{{widget type="JaroslawZielinski\TorahVerse\Block\Widget\Slider\Custom" code="ann_dicta_ignacy_loyola"}}
EOT;
        /** @var BlockModel|BlockInterface $block */
        try {
            $block = $this->getBlockByIdentifier->execute($identifier, $storeId = 0);
        } catch (NoSuchEntityException $e) {
            $block = $this->blockFactory->create();
        } finally {
            $data = [
                'title' => $title,
                'identifier' => $identifier,
                'content' => $content,
                'is_active' => true,
                'page_layout' => '1column',
                'stores' => [0]
            ];
            $block->addData($data);
            $this->blockResource->save($block);
        }
    }
}
