<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 17/07/2017
 * Time: 09:00
 */

namespace App\Sinpe;


class DateView
{
    /**
     * @param string $timestamp
     * @return string
     */
    public static function timestamp($timestamp)
    {
        $converted = date("d/m/Y H:i", strtotime($timestamp));
        return $converted;
    }

}