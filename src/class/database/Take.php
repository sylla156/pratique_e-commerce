<?php

namespace App\class\database;

use App\class\database\Connexion;

/**
 * [Description Take]
 * elle permet de prendre les elements dans ma bas de donnnes
 * @author sylla ibrahim <s6798661@gmail.com>
 */
class Take extends Connexion
{


    /**
     * @param string $email email pour identifier la personne
     * @return array c'est donne retouner
     */
    public function takeDataUser(string $email): array
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `client` WHERE `email` = ? ");

        $go->execute(array($email));

        return $go->fetchAll();
    }


    /**
     * @param string $email
     * @return array
     */
    public function takeDataAdmin(string $email): array
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `admin` WHERE `email` = ? ");

        $go->execute(array($email));

        return $go->fetchAll();
    }


    /**
     * @return array renvoie tous les admis
     */
    public function takeAllDataAdmin(): array
    {

        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `admin`");

        $go->execute();

        return $go->fetchAll();
    }


    /**
     * @param string $reference
     * @return bool
     */
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

    /**
     * @param string $reference prend un utlisateur selon sont id
     * @return bool
     */
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


    /**
     * @return array prend tous les utilisateur;
     */
    public function takeElementAllUser(): array
    {
        $this->connecter();
        $go = $this->db->prepare("SELECT * FROM `personne` ");
        $go->execute(array());

        return $go->fetchAll();
    }
}
