<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=admin", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $namee = $_GET['name'];
    $sql = "select count(*) from user where hovaten='$namee'";
    $pre = $conn->prepare($sql);
    $pre->execute();
    $length = $pre->fetchColumn();
    echo $length;
}catch (PDOException $e){
    echo "Failed: ".$e->getMessage();
}

