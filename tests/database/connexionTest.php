<?php

declare(strict_types=1);

use App\class\database\Insert;
use PHPUnit\Framework\TestCase;

class connexionTest extends TestCase
{
    // comme la class connexion est en abstrait j'ai utliser la class insert sui l'extensie directement
    public function testConnexion()
    {   $this->db = new Insert();
        $this->assertTrue($this->db->connecter());
    }
}