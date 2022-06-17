<?php

use App\Controller\IndexController;
use App\Controller\CategoryController;
use App\Controller\ProductController;


function createRoute(string $controllerName, string $methodName){
    return [
        'controller'=>$controllerName, 
        'method'=>$methodName,
    ];
}

$routes = [
    //agora pode-se criar qualquer rota e passar o controle e o metodo 
    '/' => createRoute(indexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
    '/categorias' => createRoute(CategoryController::class, 'listAction'),
    '/categorias/nova' => createRoute(CategoryController::class, 'addAction'),
    '/categorias/excluir' => createRoute(CategoryController::class, 'removeAction'),
    '/categorias/editar' => createRoute(CategoryController::class, 'updateAction'),
];


return $routes;