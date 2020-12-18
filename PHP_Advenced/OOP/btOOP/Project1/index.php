<?php
include_once 'route/web.php';
include_once 'Bootstrap/app.php';
// binding
if (isset($controller) && isset($action)) {
    if (in_array($controller, $arrControler)) {
        $controller = ucfirst($controller). 'Controller';
        $object = new $controller();
        $object->actionList();
    }else {
        require_once 'Views/errors/lost/404.php';
    }
}
//$loichao = new UserController();
//$loichao->hello();