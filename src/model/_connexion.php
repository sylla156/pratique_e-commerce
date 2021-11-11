<?php

declare(strict_types=1);

use App\class\database\Verifier;
use App\class\Filter;

if (isset($_POST['typeConnexion'])) {
    $typeConnexion = $_POST['typeConnexion'];
    if (isset($_POST['email']) and isset($_POST['password'])) {
        if ($typeConnexion == "user") {
            $email = Filter::filtersEmail($_POST['email']);
            $password = Filter::filterPassword($_POST['password']);

            if ($email !== false and $password !== false) {
                $verifieOfUser = new Verifier();

                if ($verifieOfUser->email($email) and $verifieOfUser->password($password)) {
                    $InfoOfUser = $verifieOfUser->verifieUser($email, $password);
                    if ($InfoOfUser !== null) {
                        $_SESSION['user'] = $InfoOfUser;
                        echo "<script>location.pathname = '/'</script>";
                    } elseif ($InfoOfUser === null) {
                        $connexionError = "</br>email ou password incorrect<br/>";
                    }
                }
            }
        } elseif ($typeConnexion === "admin") {
            $email = Filter::filtersEmail($_POST['email']);
            $password = Filter::filterPassword($_POST['password']);

            if ($email !== false and $password !== false) {
                $verifieOfAdmin = new Verifier();

                if ($verifieOfAdmin->email($email) and $verifieOfAdmin->password($password)) {
                    $infoAdmin = $verifieOfAdmin->verifieAdmin($email, $password);
                    if ($infoAdmin !== null) {
                        $_SESSION['admin'] = $infoAdmin;
                        echo "<script>location.pathname = '/admin'</script>";
                    } elseif ($infoAdmin === null) {
                        $connexionError = "</br>email ou password incorrect<br/>";
                    }
                }
            }
        }
    }
}
