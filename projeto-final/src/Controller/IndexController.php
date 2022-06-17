<?php

declare(strict_types = 1);

namespace App\Controller;//buscando o arquivo IndexController através do namespace principal (APP) e acessando o arquivo que esta dentro da pasta Controller

class IndexController extends AbstractController{
    
    public function indexAction():void
    {
        // include dirname(__DIR__).'/View/indexView/index.php';
        parent::render('indexView/index');//só é possivel fazer dessa forma, por causa da classe AbstractController
    }

    public function loginAction():void
    {
        // include dirname(__DIR__).'/View/indexView/login.php';
        parent::render('indexView/login');
    }
}





