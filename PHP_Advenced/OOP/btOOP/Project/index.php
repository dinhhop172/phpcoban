<?php
include_once 'Route/web.php';
include_once 'App/Bootstrap/app.php';
// binding
if (isset($controller) && isset($action)) {
    if (in_array($controller, $arrControler)) {
        $controller = ucfirst($controller). 'Controller';
        $object = new $controller();
        $object->$action();
    }else {
        require_once 'Views/errors/lost/404.php';
    }
}
//$action = new AdminController();
//$action->view('layouts/main', 'hiuhi');