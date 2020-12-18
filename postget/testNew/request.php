<?php 
// require 'CheckAdmin.php';
// if (isset($_POST['email']) && isset($_POST['password'])) {
//     // $middlw = new CheckAdmin($_POST);
//     var_dump($_POST);
// }else{
//     echo "KO co data";
// }
$name = $_POST['email'];
$pass = $_POST['password'];
var_dump($name, $pass);

?>