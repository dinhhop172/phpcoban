<?php
class AdminController
{
    public function view($file, $data)
    {
        $path = 'View/'.$file.'.php';
        if(file_exists($path)){
            ob_start();
            include_once "$path";
            $content = ob_get_clean();
            include_once 'View/layouts/main.php';
        }
    }
}

