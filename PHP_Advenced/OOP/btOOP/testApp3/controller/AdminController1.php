<?php
class AdminController1 {
//    public function view($file, $data)
//    {
//        $path = "../view/".$file.".php";
//        if(file_exists($path)){
//            ob_start();
//            require_once $path;
//            $content = ob_get_clean();
//            require_once '../view/layouts/main.php';
//        }else {
//            echo "404 NOT FOUND";
//        }
//    }

    public function view($file, $data)
    {
        $path = "view/$file".".php";
        var_dump($path);
        if(file_exists($path)){
            ob_start();
            require_once "$path";
            $content = ob_get_clean();
            require_once 'view/layouts/main.php';
        }else{
            echo 'ko tontai';
        }
    }
}