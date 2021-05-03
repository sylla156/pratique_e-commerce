<?php

declare(strict_types=1);

use App\class\database\Insert;
use App\class\database\Verifier;

$inscriptionError = "";

if (
    isset($_POST['name']) and
    isset($_POST['password']) and
    isset($_POST['passwordTest']) and
    isset($_POST['email']) and
    isset($_POST['tel'])
) {
    $nom = $_POST['name'];
    $tel =  $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_test = $_POST['passwordTest'];


    $verifierNom =  Verifier::nom($nom) === true ? true : $inscriptionError .= "que votre pseudo et pas espace";
    $verifierTel = Verifier::tel($tel) === true ? true : $inscriptionError .= "le numero de telephone sans indice";
    $verifierPassword = Verifier::passwordAll($password, $password_test) === true ? true : $inscriptionError .= "password plus de 8 caractere ou chiffre et les deux doit etre pareil";

    $db = new Insert();

    if (
        Verifier::nom($nom) and
        Verifier::tel($tel) and
        Verifier::email($email) and
        Verifier::passwordAll($password, $password_test)
    ) {
        try {
            $db->insereUser($nom, $tel, $email, $password);
        } catch (PDOException $e) {
            $inscriptionError .= "email present dans notre base de donne";
        }
    }
}
