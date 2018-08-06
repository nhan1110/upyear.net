<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function o_base64_encode(string $string)
    {
        return base64_encode($string);
    }
}