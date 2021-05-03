<?php

namespace App\class\database;

use App\class\database\Connexion;
use App\class\database\Hash;

class Insert extends connexion
{
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
