<?php namespace BetesCurieuses\Slider;

use System\Classes\PluginBase;
use Backend;

/**
 * Slider Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Slider',
            'description' => 'Show Slider',
            'author'      => 'BetesCurieuses',
            'icon'        => 'icon-youtube-play'
        ];
    }

    public function registerComponents()
    {
        return [
            'BetesCurieuses\Slider\Components\ShowImages' => 'ShowImages',
        ];
    }

    public function registerNavigation()
    {
        return [
            'Slider' => [
                'label' => 'Slider',
                'url' => Backend::url('betescurieuses/slider/slider'),
                'icon' => 'icon-youtube-play',
                'permissions' => ['betescurieuses.slider.*'],
                'order' => 500,
            ]
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'explode' => [$this, 'explodeString'],
                'phone' => [$this, 'phoneFormat'],
            ],
            'functions' => [
                // Using an inline closure
                'mytrunc' => function ($string, $length = 150, $append = "&hellip;") {
                    $string = strip_tags($string);

                    if (strlen($string) > $length) {
                        $string = wordwrap($string, $length);
                        $string = explode("\n", $string, 2);
                        $string = $string[0] . $append;
                    }

                    return $string;
                },
                'trunc' => function ($string, $length = 150, $append = "&hellip;") {
                    $string = strip_tags($string);
                    if (strlen($string) > $length) {
                        $string = substr($string, 0, $length) . $append;
                    }
                    return $string;
                },
                'nohttp' => function ($string) {
                    $string = preg_replace('#^https?://#', '', rtrim($string, '/'));
                    return $string;
                },
                'money' => function ($lang, $number, $decimals = 2, $dollar = true) {
                    $money = $dollar === true ? ' $' : '';
                    if ($lang == 'fr') {
                        $format = number_format($number, $decimals, ',', ' ') . $money;
                    } else {

                        $format = $money . number_format($number, $decimals);
                    }
                    return $format;
                }
            ]
        ];
    }

    public function explodeString($string)
    {
        return explode(";", $string);
    }

    public function phoneFormat($phoneNumber)
    {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        if (strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
            $areaCode = substr($phoneNumber, -10, 3);
            $nextThree = substr($phoneNumber, -7, 3);
            $lastFour = substr($phoneNumber, -4, 4);

            $phoneNumber = '+' . $countryCode . ' (' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
        } else if (strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $nextThree = substr($phoneNumber, 3, 3);
            $lastFour = substr($phoneNumber, 6, 4);

            $phoneNumber = '(' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
        } else if (strlen($phoneNumber) == 7) {
            $nextThree = substr($phoneNumber, 0, 3);
            $lastFour = substr($phoneNumber, 3, 4);

            $phoneNumber = $nextThree . '-' . $lastFour;
        }

        return $phoneNumber;
    }


}
