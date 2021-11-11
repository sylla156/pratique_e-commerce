<?php

namespace App\class\database;

use App\class\database\Connexion;
use App\class\database\Hash;

class Insert extends connexion
{
    public function insereUser(
        string $nom,
        int $tel,
        string $email,
        string $password
    ) {
        try {
            $this->connecter();
            $go = $this->db->prepare(
                "INSERT INTO `client` 
                (`id`, `nom`, `tel`, `email`, `pass`) 
                VALUES (NULL,?,?,?,?);
                SET @autoid := 0;
                UPDATE `client` set id = @autoid := (@autoid+1) ;
                ALTER TABLE `Client` auto_increment=1; "
            );
            $tel = (int) $tel;
            $go->execute(array($nom, $tel, $email, Hash::hash($password)));
            return true;
        } catch (\Throwable $th) {
            echo "erreur dans la class insert methode insereUser";
            echo $th->getMessage();
            return false;
        }
    }

    public function insereArticle(
        string $nom,
        string $description,
        int $prix,
        string $img
    ) {
        try {
            $this->connecter();
            $go = $this->db->prepare(
                "INSERT INTO `article` 
            (`id`, `nom`, `description`, `prix`, `img`) 
            VALUES (NULL,?,?,?,?);
            SET @autoid := 0;
            UPDATE `article` set id = @autoid := (@autoid+1) ;
            ALTER TABLE `article` auto_increment=1; "
            );
            $prix = (int) $prix;
            $go->execute(array($nom, $description, $prix, $img));
            return true;
        } catch (\Throwable $th) {
            echo "erreur dans la class insert methode insereArticle";
            echo $th->getMessage();
            return false;
        }
    }

    public function insereCarousel(
        string $img
    ) {
        try {
            $this->connecter();
            $go = $this->db->prepare(
                "INSERT INTO `carousel` 
                VALUES (NULL,?);
                SET @autoid := 0;
                UPDATE `carousel` set id = @autoid := (@autoid+1) ;
                ALTER TABLE `carousel` auto_increment=1;"
            );

            $go->execute(array($img));
            return true;
        } catch (\Throwable $th) {
            echo "erreur dans la class insert methode insereCarousel";
            echo $th->getMessage();
            return false;
        }
    }


    public function insereAdmin(
        string $nom,
        string $email,
        string $pass
    ) {
        try {
            $this->connecter();
            $go = $this->db->prepare(
                "INSERT INTO `admin` 
                VALUES (NULL,?,?,?);
                SET @autoid := 0;
                UPDATE `admin` set id = @autoid := (@autoid+1) ;
                ALTER TABLE `admin` auto_increment=1;"
            );

            $go->execute(array($nom, $email, $pass));
            return true;
        } catch (\Throwable $th) {
            echo "erreur dans la class insert methode insereAdmin";
            echo $th->getMessage();
            return false;
        }
    }
}
