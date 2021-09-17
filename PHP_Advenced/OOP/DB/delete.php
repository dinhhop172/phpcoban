<?php 
    include('data.php');
    $dt = new database;

    $id_prod = $_GET['id'];
    $dt->command("DELETE FROM product WHERE id = '$id_prod'");
    header('location: index.php');
?>