<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Ui\Component\Listing\Column\Quotes;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class Actions extends Column
{
    /**
     * Url path
     */
    public const QUOTES_URL_PATH_EDIT = 'itzielart_torahverse/quotes/edit';

    public const QUOTE_ID = 'quote_id';

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
        string $editUrl = self::QUOTES_URL_PATH_EDIT
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
                $name = $this->getData('name');
                if (isset($item[self::QUOTE_ID])) {
                    $item[$name]['edit'] = [
                        'href' => $this->urlBuilder->getUrl($this->editUrl, [self::QUOTE_ID => $item[self::QUOTE_ID]]),
                        'label' => __('Edit')
                    ];
                }
            }
        }
        return $dataSource;
    }
}
