<?php
namespace Click4Web\DeclaracaoConteudo\Core;

class Controller
{
    public function view($name, $vars = [])
    {

        extract($vars);
        $ds = DIRECTORY_SEPARATOR;
        ob_start();
        include __DIR__ . $ds . '..' . $ds . 'Resources'. $ds .'views' . $ds . $name . '.php';
        return ob_get_clean();
    }
}
