<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * @see https://stackoverflow.com/questions/1331591/given-a-background-color-black-or-white-text#answer-42921358
     */
    public static function getContrastColor(string $hexColor): string
    {
        // hexColor RGB
        $R1 = hexdec(substr($hexColor, 1, 2));
        $G1 = hexdec(substr($hexColor, 3, 2));
        $B1 = hexdec(substr($hexColor, 5, 2));

        // Black RGB
        $blackColor = '#000000';
        $R2BlackColor = hexdec(substr($blackColor, 1, 2));
        $G2BlackColor = hexdec(substr($blackColor, 3, 2));
        $B2BlackColor = hexdec(substr($blackColor, 5, 2));

        // Calc contrast ratio
        $L1 = 0.2126 * pow($R1 / 255, 2.2) +
            0.7152 * pow($G1 / 255, 2.2) +
            0.0722 * pow($B1 / 255, 2.2);

        $L2 = 0.2126 * pow($R2BlackColor / 255, 2.2) +
            0.7152 * pow($G2BlackColor / 255, 2.2) +
            0.0722 * pow($B2BlackColor / 255, 2.2);

        $contrastRatio = 0;
        if ($L1 > $L2) {
            $contrastRatio = (int)(($L1 + 0.05) / ($L2 + 0.05));
        } else {
            $contrastRatio = (int)(($L2 + 0.05) / ($L1 + 0.05));
        }

        // If contrast is more than 5, return black color
        if ($contrastRatio > 5) {
            return '#000000';
        } else {
            // if not, return white color.
            return '#FFFFFF';
        }
    }

    /**
     * @@see https://colordesigner.io/gradient-generator
     * @see https://cats2d.com/colormaps/rainbow.png
     */
    public static function getPercentageColor(float $percents): string
    {
        switch ($percents) {
            default:
            case $percents > 0.0 && $percents <= 10.0:
                return '#0000ff';
            case $percents > 10.0 && $percents <= 20.0:
                return '#0c87ff';
            case $percents > 20.0 && $percents <= 30.0:
                return '#00f1ff';
            case $percents > 30.0 && $percents <= 40.0:
                return '#00ffa0';
            case $percents > 40.0 && $percents <= 50.0:
                return '#00ff36';
            case $percents > 50.0 && $percents <= 60.0:
                return '#36ff0c';
            case $percents > 60.0 && $percents <= 70.0:
                return '#a0ff01';
            case $percents > 70.0 && $percents <= 80.0:
                return '#fef305';
            case $percents > 80.0 && $percents <= 90.0:
                return '#ff8500';
            case $percents > 90.0 && $percents < 100.0:
                return '#ff2500';
            case $percents >= 100.0:
                return '#ff0000';
        }
    }

    public static function assocArrayKeySearch(string $search, array $array): ?string
    {
        $found = null;
        array_walk($array, function ($k, $v) use ($search, &$found) {
            if (in_array($search, $k)) {
                $found = $v;
            }
        });
        return $found;
    }

    public static function escapeQuotes(?string $input): ?string
    {
        if (empty($input)) {
            return null;
        }
        return str_replace(['\''], ['&#39;'], $input);
    }

    public static function replaceMe (string $html, array $data): string
    {
        $result = $html;
        foreach ($data as $key => $value) {
            $result = str_replace('{' . $key . '}', (string)$value, $result);
        }
        return $result;
    }
}
