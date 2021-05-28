<?php

namespace App\class\database;

use PDO;

class Search extends Connexion
{
    public function searchElements(string $elementSearch, string $table)
    {
        try {
            $this->connecter();
            switch ($table) {
                case 'user':
                    $go = $this->db->prepare(
                        "SELECT * FROM client WHERE `nom`  like '%$elementSearch%';"
                    );
                    $go->execute(array());
                    break;

                case 'article':
                    $go = $this->db->prepare(
                        "SELECT * FROM article WHERE `nom`  like '%$elementSearch%'"
                    );
                    $go->execute(array());
                    break;

                case 'carousel':
                    $go = $this->db->prepare(
                        "SELECT * FROM carousel WHERE `img` like '%$elementSearch%';"
                    );
                    $go->execute(array());
                    break;
                case 'admin':
                    $go = $this->db->prepare(
                        "SELECT * FROM admin WHERE `nom` like '%$elementSearch%';"
                    );
                    $go->execute(array());
                    break;
                default:
                    $go = $this->db->prepare(
                        "SELECT * FROM article WHERE `nom` like '%$elementSearch%';"
                    );
                    $go->execute(array());
                    break;
            }
            return $go->fetchAll();
        } catch (\Throwable $th) {
            echo "erreur dans la class search methode searchElement";
            echo $th->getMessage();
            return false;
        }
    }
}
