<?php
$autoloadController = function ($className) {
    $fileName = 'App/Controller/' . $className . '.php';
    if (file_exists($fileName)) {
        include_once $fileName;
    }
};

$autoloadModel = function ($className) {
    $fileName = 'Models/' . $className . '.php';
    if (file_exists($fileName)) {
        include_once $fileName;
    }
};

spl_autoload_register($autoloadController);
spl_autoload_register($autoloadModel);

//spl_autoload_register(function($className) {
//    $fileName = 'App/Controller/' . $className . '.php';
//    if (file_exists($fileName)) {
//        include_once $fileName;
//    }
//});
//
//spl_autoload_register(function($className) {
//    $fileName = 'Models/' . $className . '.php';
//    if (file_exists($fileName)) {
//        include_once $fileName;
//    }
//});

include_once 'Helpers/helper.php';