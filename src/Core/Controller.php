<?php
namespace Click4Web\DeclaracaoConteudo\Core;

class Controller
{
    public function view($name, $vars = [])
    {
        extract($vars);
        include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Resources'. DIRECTORY_SEPARATOR .'views' . DIRECTORY_SEPARATOR . $name . '.php';
    }
}