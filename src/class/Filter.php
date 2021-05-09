<?php

namespace App\class;

use phpDocumentor\Reflection\Types\Boolean;

/**
 * [Description Filter]
 *  elle permet de nous dire un si email ou le password d'un utlisateur est correct
 * @author sylla ibrahim <s67986601@gmail.com>
 */
class Filter
{

    /**
     * @param string $value email envoyer
     * @return Boolean|string false si l'email est faux et envoie l'email si il est correct
     */
    public static function filtersEmail(string $value): Boolean|string
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param string $password le mote de passe
     * @return Boolean|string false si password est incorrect et envoie le password si c'est vrai;
     */
    public static function filterPassword(string $password): Boolean|string
    {
        if (strlen($password) >= 8) {
            return $password;
        } else {
            return false;
        }
    }
}
