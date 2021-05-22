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


    public function takeAdminrWithReference(string $reference): bool
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `admin` WHERE `id` = ? ");

        $go->execute(array($reference));

        if ($go->fetchAll() || $go->fetchALL() != null) {
            return false;
        } elseif ($go->fetchALL() == null) {
            return true;
        }
    }

    public function takeUserWithReference(string $reference): bool
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `personne` WHERE `id` = ? ");

        $go->execute(array($reference));

        if ($go->fetchAll() || $go->fetchALL() != null) {
            return false;
        } elseif ($go->fetchALL() == null) {
            return true;
        }
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
}
