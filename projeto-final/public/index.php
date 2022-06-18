<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Connection\Connection;

use App\Controller\ErrorController;

//capturando a url na posicao zero
$url = explode("?", $_SERVER['REQUEST_URI'])[0];

$routes = include '../config/routes.php';

if(false === isset($routes[$url])){
    (new ErrorController())->notFoundAction();
    exit;
}

//capturando a url dentro da rota e armazenando na variavel
$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();
