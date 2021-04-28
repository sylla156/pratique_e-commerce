<?php

declare(strict_types=1);

namespace App\class;

use AltoRouter;

/**
 * [Description Router]
 * il faire que ne faie que prende des path en constructor
 * puis implement
 * @author sylla ibrahim <s67986601@gmail.com>
 */
final class Router
{
    private $url_name;
    private $callback_url;
    private $route;
    private $redirection;

    /**
     * @param mixed ...$url_name c'est un array qui contient tous les path
     */
    public function __construct(...$url_name)
    {
        $this->url_name = $url_name;
    }

    private function initAltorouter()
    {
        $this->route = new AltoRouter();
    }

    /**
     * il permet implement les valeur dans Altorouter
     * avec un callback qui effectue
     * comme tache de require le fichier au path
     * puis troisieme valeur est pour generation
     */
    private function insertElementInAltorouter()
    {
        $this->redirection = 0;
        foreach ($this->url_name as $key => $value) {
            $this->route->map('GET|POST', $value, function () {
                if ($_SERVER['REQUEST_URI'] == !'/') {
                    $this->redirection = $_SERVER["PATH_INFO"];
                    require_once __DIR__ . "/../../view" . $this->redirection . ".php";
                }
            }, $this->redirection);
        }
    }


    /**
     *il executer le callback de insertElementInAltorouter pour le path
     * designer
     * sinon
     * sinon il require une page error
     */
    private function executeCallbackOfPath()
    {


        foreach ($this->url_name as $key => $value) {
            if ($key >= 0) {
                $this->callback_url = $this->route->match();
            }

            if (isset($this->callback_url['target'])) {
                $this->callback_url['target']();
                break;
            } else {
                require_once __DIR__ . "/../../view/error.php";
                break;
            }
        }
    }


    public function execute()
    {
        $this->initAltorouter();
        $this->insertElementInAltorouter();
        $this->executeCallbackOfPath();
    }
}
