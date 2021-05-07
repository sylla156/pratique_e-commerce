<?php

namespace App\class\database;

use App\class\database\Take;
use App\class\database\Connexion;
use App\class\database\Hash;

/**
 * [Description Verifier]
 * elle permet e verifier le valeur des utlisateur
 * @author sylla ibrahim <s67986601àgmail.com>
 */
class Verifier extends Connexion
{



    /**
     * @param string $email
     * @param string $password
     * @return array|bool
     */
    public function verifieUserForConnexion(string $email, string $password): array|bool
    {
        $this->connecter();
        $take = new Take();
        $values_take = $take->takeDataUser($email);
        foreach ($values_take as $key => $value) {
            if ($value["email"] == $email and Hash::isHash($password, $value["pass"])) {
                return $values_take;
            } else {
                return false;
            }
        }
    }

    /**
     * @param string $email
     * @param string $password
     * @return array
     */
    public function verifieAdmin(string $email, string $password): array|bool
    {
        $this->connecter();
        $take = new Take();
        $values_take = $take->takeDataAdmin($email);
        foreach ($values_take as $key => $value) {
            if ($value["email"] == $email and $value["pass"] == $password) {
                return $values_take;
            } else {
                return false;
            }
        }
    }

    /**
     * @param string $nom
     * @return bool
     */
    public static function nom(string $nom): bool
    {
        if ($nom == "") {
            return false;
        } else {
            if (
                !preg_match(
                    "/\d|\s|\n|[,?.;:\/!§<>µ*ù%\$£^¨¤=)àç_è\-\(\)\'\"&+}\]@\^\\`\|\[\{\}\#\~]/",
                    $nom
                ) == true
            ) {
                return true;
            } elseif (
                !preg_match(
                    "/\d|\s|\n|[,?.;:\/!§<>µ*ù%\$£^¨¤=)àç_è\-\(\)\'\"&+}\]@\^\\`\|\[\{\}\#\~]/",
                    $nom
                ) == false
            ) {
                return false;
            }
        }
    }




    /**
     * @param mixed $tel
     * @return bool
     */
    public static function tel($tel): bool
    {
        if ($tel == "") {
            return false;
        } else {
            if (
                !preg_match(
                    "/[A-z]|\s|\n|\t|[,?.;:\/!§<>µ*ù%\$£^¨¤=)àç_è\-\(\)\'\"&+}\]@\^\\`\|\[\{\}\#\~]/",
                    $tel
                ) == true
            ) {
                if (strlen($tel) == 8 || strlen($tel) == 10) {
                    return true;
                } elseif (strlen($tel) < 8 || strlen($tel) > 10 || strlen($tel) == 9) {
                    return false;
                }
            } elseif (
                !preg_match(
                    "/[A-z]|\s|\n|\t|[,?.;:\/!§<>µ*ù%\$£^¨¤=)àç_è\-\(\)\'\"&+}\]@\^\\`\|\[\{\}\#\~]/",
                    $tel
                ) == false
            ) {
                return false;
            }
        }
    }






    /**
     * @param string $email
     * @return bool
     */
    public static function email(string $email): bool
    {
        $test = "/^([a-zA-Z0-9_\-\.]+)@(gmail|yahoo|Outlook|Posteo|AOL|GMX+)\.(com|net{2,5})$/";
        if ($email == "") {
            return false;
        } else {
            if (preg_match($test, $email) == true) {
                return true;
                // $take = new take();
                // if ($take->takeDataUser($email) == NULL) {
                // } else if ($take->takeDataUser($email) !== NULL) {
                // return false;
                // }
            } elseif (preg_match($test, $email) == false) {
                return false;
            }
        }
    }





    /**
     * @param string $password
     * @param string $password_test
     * @return bool
     */
    public static function passwordAll(string $password, string $password_test): bool
    {
        if ($password == "" and $password_test == "") {
            return false;
        } elseif ($password === $password_test) {
            if (strlen($password) >= 8 and strlen($password_test) >= 8) {
                return true;
            } elseif (strlen($password) < 8 and strlen($password_test) < 8) {
                return false;
            }
        }
    }


    /**
     * @param string $password
     * @return bool
     */
    public static function password(string $password): bool
    {
        if (strlen($password) >= 8) {
            return true;
        } else {
            return false;
        }
    }



    /**
     * @param int $reference
     * @param string $typeTable
     * @return bool
     */
    public static function reference(int $reference, string $typeTable): bool
    {
        if (gettype($reference) == 'integer') {
            $take = new Take();
            if ($typeTable == "admin") {
                if ($take->takeAdminrWithReference($reference)) {
                    return true;
                } else {
                    return false;
                }
            } elseif ($typeTable == "user") {
                if ($take->takeUserWithReference($reference)) {
                    return true;
                } else {
                }
            }
        }
    }
}
