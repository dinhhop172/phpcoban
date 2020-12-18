<?php

class AdminController
{
    public function view($file, $data)
    {
        $path = '../view/' . $file . '.php';
        if (file_exists($path)) {
            ob_start();
            require_once $path;
            $content = ob_get_clean();
            require_once '../view/layouts/main.php';
        } else {
            require_once '../view/errors/lost/404.php';
        }
    }
}