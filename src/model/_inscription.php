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


    $verifierNom =  Verifier::nom($nom) === true ? true : $inscriptionError .= "*votre pseudo est incorrect</br>";
    $verifierTel = Verifier::tel($tel) === true ? true : $inscriptionError .= "*le numero de telephone est incorrect </br>";
    $verifierPassword = Verifier::passwordAll($password, $password_test) === true ? true : $inscriptionError .= "*le mote de passe plus de 8 caractere ou chiffre et les deux doit etre pareil</br>";

    $db = new Insert();

    if (
        Verifier::nom($nom) and
        Verifier::tel($tel) and
        Verifier::email($email) and
        Verifier::passwordAll($password, $password_test)
    ) {
        try {
            $db->insereUser($nom, $tel, $email, $password);
            echo "<script>location.pathname = '/'</script>";
        } catch (PDOException $e) {
            $inscriptionError .= "email present dans notre base de donne<br/>";
        }
    }
}
