<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=testajax", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['username']) && isset($_POST['email'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $sql = "INSERT INTO member(username, email) VALUES(:username, :email)";
        $pre = $conn->prepare($sql);
        $pre->bindParam(":username", $username, PDO::PARAM_STR);
        $pre->bindParam(":email", $email, PDO::PARAM_STR);
        $pre->execute();
        if($pre){
            echo 'Insert thanh cong';
        }else{
            echo 'Insert that bai';
        }
    }else{
        echo 'Vui long nhap du lieu';
    };
}catch (PDOException $e){
    echo $e->getMessage();
};
