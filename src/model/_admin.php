<?php

declare(strict_types=1);

use App\class\database\Take;

$adminName = $_SESSION['admin'][0]['nom'] ?? null;
$adminEmail = $_SESSION['admin'][0]['email'] ?? null;
$adminPassword = $_SESSION['admin'][0]['pass'] ?? null;
$adminTel = $_SESSION['admin'][0]['tel'] ?? null;
$error = $connexionError ?? "";

$title = 'user';
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
