<?php
require_once 'controller/UserController1.php';
require_once 'controller/ProductController1.php';
require_once 'controller/OrderController1.php';
require_once 'model/UserModel1.php';
require_once 'model/ProductModel1.php';
require_once 'model/OrderModel1.php';

$controller = $_GET['controller'];
$action = $_GET['action'];

$arrayController = [
    'user',
    'product',
    'order'
];
if(isset($controller) && isset($action)){
    if(in_array($controller, $arrayController)){
        $controller = ucfirst($controller).'Controller1';

        $object = new $controller;
        $object->$action();
    }else{
        echo '404 not found';
    }
}