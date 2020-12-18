<?php 
    // require_once '/route/index.php';
//     require_once 'route/index.php';

    require_once 'helper/helper.php';
    require_once 'middleware/CheckAdmin.php';
    require_once 'controller/UserController.php';
    require_once 'model/UserModel.php';

    $user = new UserController();
    $listUser = $user->actionList();
?>