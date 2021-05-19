<?php

declare(strict_types=1);

$adminName = $_SESSION['admin'][0]['nom'] ?? null;
$adminEmail = $_SESSION['admin'][0]['email'] ?? null;
$adminPassword = $_SESSION['admin'][0]['pass'] ?? null;
$adminTel = $_SESSION['admin'][0]['tel'] ?? null;
$error = $connexionError ?? "";

$user = "mees client fidele les user";
$article = "ou se trouve mais article";
$carousel = "je suis dans le carousel";
$admin = "gestion des admin";
