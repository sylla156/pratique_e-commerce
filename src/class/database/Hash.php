<?php

namespace App\class\database;

use phpDocumentor\Reflection\Types\Boolean;

/**
 * [Description Hash]
 * il permet de hasher les motes de passe
 * et il permet de les verifier
 * @author sylla ibrahim <s67986601àgmail.com>
 */
class Hash
{



    /**
     * @param string $password le password a hasher
     * @return string le password hasher
     */
    public static function hash(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }



    /**
     * @param string $password le password a verifier
     * @param string  $password_hash le password hasher
     * @return bool true : si le password correspond au passwordHasher flase : si il ne correspond pas
     */
    public static function isHash(string $password, string $password_hash): bool
    {
        return password_verify($password, $password_hash);
    }
}
