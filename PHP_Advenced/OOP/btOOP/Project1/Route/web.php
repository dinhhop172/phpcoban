<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : $_GET['controller'] = 'user';
$action = isset($_GET['action']) ? $_GET['action'] : $_GET['action'] = 'list';
$arrControler = [
    'user',
    'product',
    'order'
];
