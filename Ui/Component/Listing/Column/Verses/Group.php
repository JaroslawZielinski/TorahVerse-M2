<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\Listing\Column\Verses;

use ITZielArt\TorahVerse\Api\Data\GroupInterface;
use ITZielArt\TorahVerse\Api\GroupRepositoryInterface;
use ITZielArt\TorahVerse\Helper\Data;
use Magento\Framework\Api\AttributeInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class Group extends Column
{
    public const COLUMN_GROUP = 'group';
    public const COLUMN_GROUP_ID = 'group_id';

    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;

    /**
     * @inheritDoc
     */
    public function __construct(
        GroupRepositoryInterface $groupRepository,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->groupRepository = $groupRepository;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * {@inheritdoc}
     * @throws LocalizedException
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[self::COLUMN_GROUP])) {
                    /** @var AttributeInterface $groupCustomerAttribute */
                    $item[self::COLUMN_GROUP] = $this->getGroupHtml((int)$item[self::COLUMN_GROUP_ID]);
                }
            }
        }

        return $dataSource;
    }



    /**
     * @throws LocalizedException
     */
    private function getGroupHtml(int $groupId): string
    {
        $group = $this->groupRepository->get($groupId);
        $colorValue = $group->getColourValue();
        if (GroupInterface::NO_COLOR === $colorValue) {
            $colorValue = '#FFFFFF';
        }
        $contrastColorValue = Data::getContrastColor($colorValue);
        return sprintf(
            '<div class="group-grid" style="color: %s; background-color: %s;text-align: center;">%s</div>',
            $contrastColorValue,
            $colorValue,
            $group->getName()
        );
    }
}
