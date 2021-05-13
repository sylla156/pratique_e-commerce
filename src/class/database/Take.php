<?php

namespace App\class\database;

use App\class\database\Connexion;

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


    public function takeAllDataAdmin(): array
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `admin`");

        $go->execute();

        return $go->fetchAll();
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
        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `personne` ");
        $go->execute(array());

        return $go->fetchAll();
    }
}
