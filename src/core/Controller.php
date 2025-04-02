<?php

namespace Core;

class Controller
{
    protected function view($view, $data = [])
    {
        extract($data);
        $viewFile = "../src/views/{$view}.php";
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "View {$view} not found!";
        }
    }
}