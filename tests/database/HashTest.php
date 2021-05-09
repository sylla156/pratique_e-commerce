<?php

use App\class\database\Hash;
use PHPUnit\Framework\TestCase;

class HashTest extends TestCase
{
    public $password = "mote de passe a hasher";
    public $passwordHasher;

    public function testhash()
    {
        $this->passwordHasher = Hash::hash($this->password);
       $this->assertIsString($this->passwordHasher, "le hash ne marche pas");

    }
    
    public function testishash()
    {
        $this->passwordHasher = Hash::hash($this->password);
        $this->assertTrue(Hash::isHash($this->password, $this->passwordHasher), "ta verification de hash a un probleme");
    }
}