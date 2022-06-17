<?php

declare(strict_types = 1);

namespace App\Controller;

//por ser abstrata essa classse não pode ser instanciada, o propósito dela é abstrair o caminho de todas as views que sao chamadas em cada controller, deixando o caminho bem mais curto
abstract class AbstractController
{
    public function render(string $viewName, $data = null):void
    {
        include dirname(__DIR__)."/View/{$viewName}.php";
    }
}


