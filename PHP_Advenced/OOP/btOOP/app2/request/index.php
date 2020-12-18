<?php

require_once '../helper/helper.php';
require_once '../middleware/CheckAdmin.php';
require_once '../controller/UserController.php';
require_once '../model/UserModel.php';

// OOP => TRUU...
// kiem tra xem 1 gia tri nao do ton tai hay khong
if (isset($_POST['email']) && isset($_POST['password'])) {
    // $credentials = $_POST;
    $middleware = new CheckAdmin($_POST);
    $isAdmin = $middleware->isAdmin();
    if ($isAdmin) {
        $user = new UserController();
        $listUser = $user->actionlist();

        foreach ($listUser as $user) {
            echo '</br>'. $user['id']. '&nbsp;&nbsp;&nbsp;';
            echo $user['name'] . '&nbsp;&nbsp;&nbsp;';
            echo $user['sex'] == UserModel::MALE ? 'Nam' : 'Nu' . '&nbsp;&nbsp;&nbsp;';
        }
    }else {
        redirect('../index.php');
    }
    // if() -> new Controller
}else {
    echo "khong co value";
}

?>