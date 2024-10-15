<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Group;

use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;
use JaroslawZielinski\TorahVerse\Model\Quote\Install;

class Annual extends Install
{
    /**
     * @see https://elementalcolour.com.au/blog/charting-the-12-tones
     */
    private const ANNUAL_GROUPS = [
        [
            'data' => [
                'code' => 'ANN_MONTH_01',
                'name' => 'January',
                'colour_value' => '#ef3e54',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_02',
                'name' => 'February',
                'colour_value' => '#fbcb32',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_03',
                'name' => 'March',
                'colour_value' => '#cae084',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_04',
                'name' => 'April',
                'colour_value' => '#81c9b7',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_05',
                'name' => 'May',
                'colour_value' => '#98bee5',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_06',
                'name' => 'June',
                'colour_value' => '#e6a4b5',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_07',
                'name' => 'July',
                'colour_value' => '#ea8384',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_08',
                'name' => 'August',
                'colour_value' => '#efae3d',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_09',
                'name' => 'September',
                'colour_value' => '#646b3b',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_10',
                'name' => 'October',
                'colour_value' => '#235b4f',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_11',
                'name' => 'November',
                'colour_value' => '#234aa6',
                'is_annual' => true
            ],
            'child' => []
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_12',
                'name' => 'December',
                'colour_value' => '#ce2493',
                'is_annual' => true
            ],
            'child' => []
        ]
    ];

    /**
     * @inheritDoc
     */
    public function execute(string $language = Language::LANGUAGE_PL): void
    {
        $this->install(self::ANNUAL_GROUPS);
    }
}
