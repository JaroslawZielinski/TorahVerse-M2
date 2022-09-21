<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Ui\Component\Listing\Column\Groups;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class Actions extends Column
{
    /**
     * Url path
     */
    public const GROUPS_URL_PATH_EDIT = 'jaroslawzielinski_torahverse/groups/edit';

    public const GROUP_ID = 'group_id';

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    /**
     * @var string
     */
    private $editUrl;

    /**
     * @inheritDoc
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = [],
        string $editUrl = self::GROUPS_URL_PATH_EDIT
    ) {
        $this->urlBuilder = $urlBuilder;
        $this->editUrl = $editUrl;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * @inheritDoc
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if ('default' === $item['code']) {
                    continue;
                }
                $name = $this->getData('name');
                if (isset($item[self::GROUP_ID])) {
                    $item[$name]['edit'] = [
                        'href' => $this->urlBuilder->getUrl($this->editUrl, [self::GROUP_ID => $item[self::GROUP_ID]]),
                        'label' => __('Edit')
                    ];
                }
            }
        }
        return $dataSource;
    }
}
