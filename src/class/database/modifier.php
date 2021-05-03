<?php

namespace aps\database;

use aps\database\connexion;
use aps\database\hash;
use aps\redirection;

class modifier extends connexion
{



    public function modifier_admin(string $nom, string $prenom,string $email, string $password ,$reference)
    {
        $this->connecter();
        $go = $this->db->prepare("UPDATE `admin` SET `nom`= ?,`prenom`=?,`email`=?,`pass`= ? WHERE id = ?");

        $go->execute(array($nom,$prenom,$email,$password,$reference));
        return true;
    }


    public function modifier_user(string $nom, string $prenom,string $email,int $tel,string $password,$reference)
    {
        $this->connecter();
        $go = $this->db->prepare("UPDATE `personne` SET `nom`= ?,`prenom`=?,`tel` = ?,`email`=? ,`pass`= ? WHERE id = ?");

        $go->execute(array($nom,$prenom,$tel,$email,hash::or_hash($password),$reference));
        return true;
    }


}
