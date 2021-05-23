<?php

namespace App\class\database;

class Update extends connexion
{

    public function updateAdmin(int $reference, string $nom, string $email, string $password)
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("UPDATE `admin` SET `nom`= ?,`email`=?,`pass`= ? WHERE id = ?");
            $go->execute(array($nom, $email, $password, $reference));
            return true;
        } catch (\Throwable $th) {
            echo "erreur de modification de admin";
            echo $th->getMessage();
        } finally {
            return false;
        }
    }


    public function updateUser(int $reference, string $nom, int $tel, string $email)
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("UPDATE `client` SET `nom`= ?,`tel` = ?,`email`=? WHERE id = ?");
            $go->execute(array($nom, $tel, $email, $reference));
            return true;
        } catch (\Throwable $th) {
            echo "erreur de modification de user";
            echo $th->getMessage();
        } finally {
            return false;
        }
    }



    public function updateArticle(int $reference, string $nom, string $description, int $prix, string $img)
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("UPDATE `article` SET `nom`= ?,`description`= ?,`prix`= ?, `img`= ? WHERE id = ?");
            $go->execute(array($nom, $description, $prix, $img, $reference));
            return true;
        } catch (\Throwable $th) {
            echo "erreur de modification de article";
            echo $th->getMessage();
        } finally {
            return false;
        }
    }


    public function updateCarousel(int $reference, string $img)
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("UPDATE `carousel` SET `img`= ? WHERE id = ?");
            $go->execute(array($img, $reference));
            return true;
        } catch (\Throwable $th) {
            echo "erreur de modification de carousel";
            echo $th->getMessage();
        } finally {
            return false;
        }
    }
}
