<?php

declare(strict_types=1);

use App\class\database\Verifier;
use App\class\Filter;

if (isset($_POST['email']) and isset($_POST['password'])) {
    $email = Filter::filtersEmail($_POST['email']);
    $password = Filter::filterPassword($_POST['password']);

    if ($email !== false and $password !== false) {
        $verifieOfUser = new Verifier();

        if ($verifieOfUser->email($email) and $verifieOfUser->password($password)) {
            $InfoOfUser = $verifieOfUser->verifieUserForConnexion($email, $password);
            if ($InfoOfUser !== null) {
                $_SESSION['user'] = $InfoOfUser;
                echo "<script>location.pathname = '/'</script>";
            } elseif ($InfoOfUser === null) {
                $connexionError = "</br>connexion ou password incorrect<br/>";
            }
        }
    }
}
