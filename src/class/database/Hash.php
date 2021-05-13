<?php

namespace App\class\database;

class Hash
{



    public static function hash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }



    public static function isHash($password, $password_hash)
    {
        return password_verify($password, $password_hash);
    }
}
