<?php
$autoloadController = function ($className) {
    $path = 'App/Controller/' . $className . '.php';
    if (file_exists($path)) {
        include_once "$path";
    } else {
        echo '404 NOT FOUND';
    }
};

$autoloadModel = function ($className) {
    $path = 'Models/' . $className . '.php';
    if (file_exists($path)) {
        include_once "$path";
    } else {
        echo '404 NOT FOUND';
    }
};

spl_autoload_register($autoloadController);
spl_autoload_register($autoloadModel);

