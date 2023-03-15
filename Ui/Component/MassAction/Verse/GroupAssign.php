<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\MassAction\Verse;

use ITZielArt\TorahVerse\Model\Group;
use Laminas\Stdlib\JsonSerializable;
use Magento\Framework\UrlInterface;
use ITZielArt\TorahVerse\Model\ResourceModel\Group\CollectionFactory;

class GroupAssign implements JsonSerializable
{
    /**
     * @var array
     */
    private $options;
    /**
     * Additional options params
     *
     * @var array
     */
    private $data;
    /**
     * @var UrlInterface
     */
    private $urlBuilder;
    /**
     * Base URL for subactions
     *
     * @var string
     */
    private $urlPath;
    /**
     * Param name for subactions
     *
     * @var string
     */
    private $paramName;
    /**
     * Additional params for subactions
     *
     * @var array
     */
    private $additionalData = [];

    /**
     * @var CollectionFactory
     */
    private $groupCollectionFactory;

    public function __construct(
        CollectionFactory $groupCollectionFactory,
        UrlInterface $urlBuilder,
        array $data = []
    ) {
        $this->groupCollectionFactory = $groupCollectionFactory;
        $this->data = $data;
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        $i = 0;
        if (empty($this->options)) {
            $groupsCollection = $this->groupCollectionFactory->create()->load();
            if (!count($groupsCollection->getItems())) {
                return [];
            }
            $options = [];
            /** @var Group $group */
            foreach ($groupsCollection->getItems() as $group) {
                $groupData = $group->getDataModel();
                $options[$i]['value'] = $groupData->getCode();
                $options[$i]['label'] = $groupData->getName();
                $i++;
            }
            $this->prepareData();
            foreach ($options as $optionCode) {
                $optionCodeLabel = $optionCode['label'];
                $optionCodeValue = $optionCode['value'];
                $this->options[$optionCodeValue] = [
                    'type' => 'group_assign_' . $optionCodeValue,
                    'label' => $optionCodeLabel,
                ];

                if ($this->urlPath && $this->paramName) {
                    $this->options[$optionCodeValue]['url'] = $this->urlBuilder->getUrl(
                        $this->urlPath,
                        [$this->paramName => $optionCodeValue]
                    );
                }

                $additionalData = $this->hydrateGroupName($optionCodeLabel, $this->additionalData);

                $this->options[$optionCodeValue] = array_merge_recursive(
                    $this->options[$optionCodeValue],
                    $additionalData
                );
            }
            $this->options = array_values($this->options);
        }
        return $this->options;
    }

    private function prepareData(): void
    {
        foreach ($this->data as $key => $value) {
            switch ($key) {
                case 'urlPath':
                    $this->urlPath = $value;
                    break;
                case 'paramName':
                    $this->paramName = $value;
                    break;
                default:
                    $this->additionalData[$key] = $value;
                    break;
            }
        }
    }

    private function hydrateGroupName(string $groupName, array $additionalData): array
    {
        $newTitle = sprintf($additionalData['confirm']['title'], $groupName);
        $additionalData['confirm']['title'] = $newTitle;
        return $additionalData;
    }
}
