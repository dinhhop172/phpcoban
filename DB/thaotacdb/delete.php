<?php 
    include('connect.php');
    $id_prod = $_GET['id'];
    $sql = "DELETE FROM product WHERE id = '$id_prod'";
    if ($conn -> query($sql) === TRUE) {
        header('location: index.php');
    }else{
        echo 'Delete Failed: '.$conn->error;
    }
    
?>