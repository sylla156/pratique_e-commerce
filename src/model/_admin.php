<?php

declare(strict_types=1);

use App\class\database\Delete;
use App\class\database\Take;
use App\class\database\Update;

$adminName = $_SESSION['admin'][0]['nom'] ?? null;
$adminEmail = $_SESSION['admin'][0]['email'] ?? null;
$adminPassword = $_SESSION['admin'][0]['pass'] ?? null;
$adminTel = $_SESSION['admin'][0]['tel'] ?? null;
$error = $connexionError ?? "";

$title = 'article';
$take = new Take();
foreach ($_GET as $key => $value) {
    $title = $key;
    switch ($key) {
        case 'user':
            $data = $take->takeElementAllUser();
            break;
        case 'article':
            $data = $take->takeElementAllArticle();
            break;
        case 'admin':
            $data = $take->takeElementAllAdmin();
            break;
        case 'carousel':
            $data = $take->takeElementAllCarousel();
            break;
        default:
            $data = [];
            break;
    }
}
if ($_POST != null) {
    $info = explode('&', $_POST['info']);
    $mode = $info[0];
    $zone = $info[1];
    $id = intval($info[2]);
    if ($zone === 'update') {
        if (isset($_POST['img'])) {
            if ($_POST['img'] === "") {
                $_POST['img'] = $data[-1 + $id]['img'];
            }
        }
        $update = new Update();
        switch ($mode) {
            case 'user':
                $update->updateUser($id, $_POST['nom'], intval($_POST['tel']), $_POST['email']);
                $data = $take->takeElementAllUser();
                break;
            case 'admin':
                $update->updateAdmin($id, $_POST['nom'], $_POST['email'], $_POST['pass']);
                $data = $take->takeElementAllAdmin();
                break;
            case 'article':
                $desc = $_POST['description'];
                $update->updateArticle($id, $_POST['nom'], $desc, intval($_POST['prix']), $_POST['img']);
                $data = $take->takeElementAllArticle();
                break;
            case 'carousel':
                $update->updateCarousel($id, $_POST['img']);
                $data = $take->takeElementAllCarousel();
                break;
            default:
                # code...
                break;
        }
    } elseif ($zone === 'delete') {
        $delete = new Delete();
        $delete->deleteElementOftable($mode, $id);
        switch ($mode) {
            case 'user':
                $data = $take->takeElementAllUser();
                break;
            case 'admin':
                $data = $take->takeElementAllAdmin();
                break;
            case 'article':
                $data = $take->takeElementAllArticle();
                break;
            case 'carousel':
                $data = $take->takeElementAllCarousel();
                break;
            default:
                # code...
                break;
        }
    }
}
