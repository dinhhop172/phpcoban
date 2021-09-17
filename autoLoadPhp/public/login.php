<?php

require_once('../vendor/autoload.php');
require_once(__DIR__ . "/../config/Constant.php");

$newProduct = new App\Models\ProductModel;
$slack = new App\Mail\Slack;
$product = new App\Http\Controllers\ProductController($newProduct, $slack);
echo $product->getProduct() . '<br>';

echo $product->login();
