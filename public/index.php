<?php

use App\class\Router;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$title_of_references = "acceuil";
$title_of_site = "logo";


require_once __DIR__ . DIRECTORY_SEPARATOR . "layout.php";
require_once "../vendor/autoload.php";

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

$router = new Router("/connexion", "/inscription", "/");
$router->execute();
