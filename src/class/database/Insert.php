<?php

namespace App\class\database;

use App\class\database\Connexion;
use App\class\database\Hash;

/**
 * [Description Insert]
 * cette class nous permet inserer des elements dans notre base de donnees
 * @author sylla ibrahim <s67986601@gmail.com>
 */

class Insert extends connexion
{
    /**
     * @param string $nom le nom de utlisateur
     * @param string $tel le numero de tlephone
     * @param string $email l'email de utlisateur
     * @param string $password le password de utlisateur
     * @return bool pour verifier que tous c'est bien passer
     */
    public function insereUser(
        string $nom,
        string $tel,
        string $email,
        string $password
    ) {

        $this->connecter();
        $go = $this->db->prepare(
            "INSERT INTO `client` 
            (`id`, `nom`, `tel`, `email`, `pass`) 
            VALUES (NULL,?,?,?,?)"
        );

        $go->execute(array($nom, $tel, $email, Hash::hash($password)));
        return true;
    }
}
