<?php

require_once '../helper/helper.php';
require_once '../middleware/CheckAdmin.php';
require_once '../controller/UserController.php';
require_once '../model/UserModel.php';


$user = new UserController();
$listUser = $user->actionList();

// $firstUser = $user->first();
// $firstUser = $user->detail(1);



// OOP; di sau;; demo cho cac ban thay...
// OOP => TRUU...
// kiem tra xem 1 gia tri nao do ton tai hay khong
// if (isset($_POST['email']) && isset($_POST['password'])) {
//     $credentials = $_POST;
//     $middleware = new CheckAdmin($credentials);
//     $isAdmin = $middleware->isAdmin();

// //    pattern => Kyx thuat thuong dang
// //    OOP
// // loc du lieu
//     if ($isAdmin) {
//         $user = new UserController();
//         $listUser = $user->actionList();

//         $firstUser = $user->first();
        
// // //        static function
// //         dd($listUser);

//         // foreach ($listUser as $user) {
//         //     echo '</br>'. $user['id']. '&nbsp;&nbsp;&nbsp;';
//         //     echo $user['name'] . '&nbsp;&nbsp;&nbsp;';
//         //     echo ($user['sex'] == UserModel::MALE) ? 'Nam' : 'Nu' . '&nbsp;&nbsp;&nbsp;';
//         // }
//     }else {
//         redirect('http://localhost:8000/');
//     }
//     // if() -> new Controller
// }else {
//     echo "Ban khong co quyen";
// }


?>