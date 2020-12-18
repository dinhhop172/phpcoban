<?php
include_once 'Bootstrap/app.php';
include_once 'Route/web.php';

if(isset($controller) && isset($action)){
    if(in_array($controller, $arrayController)){
        $controller = ucfirst($controller) . 'Controller';
        $object = new $controller();
        $object->$action();
    }else {
//        require_once 'Views/errors/lost/404.php';
        echo '404 not found';
    }
}