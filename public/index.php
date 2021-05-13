<?php

use App\class\Router;
use phpDocumentor\Reflection\Types\Null_;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

session_start();

require_once "../vendor/autoload.php";

$title_of_references = "acceuil";
$title_of_site = "logo";

$userName = $_SESSION['user'][0]['nom'] ?? null;
$userEmail = $_SESSION['user'][0]['email'] ?? null;
$userPassword = $_SESSION['user'][0]['pass'] ?? null;
$userTel = $_SESSION['user'][0]['tel'] ?? null;

require_once __DIR__ . DIRECTORY_SEPARATOR . "layout.php";

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

$router = new Router("/connexion", "/inscription", "/", "/deconnexion", "/article", "/panier");
$router->execute();
