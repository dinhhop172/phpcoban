<?php
// require_once('autoload.php');
require_once('vendor/autoload.php');

use App\Http\Controllers\HomeController;

$homeController = new HomeController();
echo $homeController->index();
// echo 'hi';
