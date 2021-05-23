<?php

namespace App\class\database;

use App\class\database\Connexion;

class Delete extends connexion
{



    public function deleteElementOftable(string $table, int $id): bool
    {
        try {
            $this->connecter();
            $go = $this->db->prepare("DELETE FROM `$table`  WHERE id = ?;
                                     SET @autoid := 0;
                                     UPDATE `$table` set id = @autoid := (@autoid+1) ;
                                     ALTER TABLE `$table` auto_increment=1; 
                                     ");
            $go->execute(array($id));
            return true;
        } catch (\Throwable $th) {
            echo "erreur provenant de la class delete";
            echo $th->getMessage();
            return false;
        }
    }
}
