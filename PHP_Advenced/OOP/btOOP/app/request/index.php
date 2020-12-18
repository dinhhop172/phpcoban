<?php
// get data;;;
// goi middleware -> goi controller 
// -> khong du dieu kien => tra no ve;;
// $_POST[''];
// $userName = 'vu@gmail.com';
// $passWord = '1234';
// $role = ADMIN;
// $roleMember;


// if(middleware) {
//     new UserController()->action();
// }else {
//     return 'khong duoc phep';
// }
// header('index.html');
    require '../middleware/CheckAdmin.php';
    require '../controller/UserController.php';
    $username = isset($_POST['name']) ? $_POST['name'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $person1 = new CheckAdmin($username, $password);
    // echo $person1->checkRole();
    if($person1->getName() == "vu@gmail.com" && $person1->getPassword() == "1234")
    {
        $hiAdmin = new UserController();
        $hiAdmin->action();
    }else
    {
        $_SESSION['member'] = "Ban khong phai Admin";
        header("Location: ../index.php");
        exit();
    }
    


?>