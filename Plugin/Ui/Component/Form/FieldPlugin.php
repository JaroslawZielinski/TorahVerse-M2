<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Plugin\Ui\Component\Form;

use Magento\Framework\UrlInterface;
use Magento\Ui\Component\Form\Field;

class FieldPlugin
{
    /**
     * @var UrlInterface
     */
    private $urlBuilder;
    /**
     * @var string
     */
    private $key;
    /**
     * @var string[]
     */
    private $fields;

    public function __construct(
        UrlInterface $urlBuilder,
        string $key,
        array $fields
    ) {
        $this->urlBuilder = $urlBuilder;
        $this->key = $key;
        $this->fields = $fields;
    }

    public function afterPrepare(Field $subject, $result = null)
    {
        $name = $subject->getName();
        if (in_array($name, $this->fields)) {
            $configuration = $subject->getConfiguration();
            $route = $configuration[$this->key] ?? null;
            if (!empty($route)) {
                $url = $this->urlBuilder->getUrl($route);
                $configuration[$this->key] = $url;
                $subject->setData('config', $configuration);
            }
        }
        return $result;
    }
}
