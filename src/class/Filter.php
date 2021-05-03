<?php

namespace App\class;

use phpDocumentor\Reflection\Types\Boolean;

class Filter
{

    public static function filtersEmail(string $value): Boolean|string
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function filterPassword(string $password): Boolean|string
    {
        if (strlen($password) >= 8) {
            return $password;
        } else {
            return false;
        }
    }
}
