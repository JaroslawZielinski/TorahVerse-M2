<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Plugin\Backend\Model\Menu;

use Magento\Backend\Model\Menu\Item;
use Magento\Framework\UrlInterface;

class ItemPlugin
{
    /**
     * @var UrlInterface
     */
    private $frontUrlModel;

    /**
     */
    public function __construct(UrlInterface $frontUrlModel)
    {
        $this->frontUrlModel = $frontUrlModel;
    }

    public function afterGetUrl(Item $subject, $result)
    {
        $info = $subject->toArray();
        if (in_array($info['resource'], [
            'JaroslawZielinski_TorahVerse::versesearch',
            'JaroslawZielinski_TorahVerse::verseconfig'
        ])) {
            return $this->frontUrlModel->getUrl($info['action']);
        }
        return $result;
    }
}
