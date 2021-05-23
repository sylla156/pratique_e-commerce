<?php

namespace App\class\database;

use App\class\database\Connexion;
use PDO;

class Take extends Connexion
{


    public function takeDataUser(string $email): array
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `client` WHERE `email` = ? ");

        $go->execute(array($email));

        return $go->fetchAll();
    }


    public function takeDataAdmin(string $email): array
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `admin` WHERE `email` = ? ");

        $go->execute(array($email));

        return $go->fetchAll();
    }


    public function takeElementAllAdmin(): array
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `admin`");

        $go->execute();

        return $go->fetchAll(PDO::FETCH_ASSOC);
    }



    public function takeElementAllUser(): array
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("SELECT id,nom,tel,email FROM `client` ");
            $go->execute(array());
            return $go->fetchALL(PDO::FETCH_ASSOC);
        } catch (\throwable $th) {
            echo "erreur dans la classe Take voir a la ligne";
            echo __LINE__;
            echo "du fichier";
            echo __FILE__;
        }
    }

    public function takeElementAllArticle(): array
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("SELECT * FROM `article` ");
            $go->execute(array());
            return $go->fetchALL(PDO::FETCH_ASSOC);
        } catch (\throwable $th) {
            echo "erreur dans la classe Take voir a la ligne";
            echo __LINE__;
            echo "du fichier";
            echo __FILE__;
        }
    }


    public function takeElementAllCarousel(): array
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("SELECT * FROM `carousel` ");
            $go->execute(array());
            return $go->fetchALL(PDO::FETCH_ASSOC);
        } catch (\throwable $th) {
            echo "erreur dans la classe Take voir a la ligne";
            echo __LINE__;
            echo "du fichier";
            echo __FILE__;
        }
    }


    public function takeViaSql($sql): array
    {
        try {
            $this->connecter();
            $go = $this->db->prepare($sql);
            $go->execute(array());
            return $go->fetchALL(PDO::FETCH_ASSOC);
        } catch (\throwable $th) {
            echo "erreur dans la classe Take voir a la ligne";
            echo __LINE__;
            echo "du fichier";
            echo __FILE__;
        }
    }
}
