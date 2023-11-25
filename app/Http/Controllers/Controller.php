<?php

namespace Afra\App\Http\Controllers;
class Controller
{
    protected function render($view, $data)
    {
        ob_start();
        extract($data);
        include __DIR__ . '/../../../resources/' . $view . '.php';
        return ob_get_clean();
    }

}