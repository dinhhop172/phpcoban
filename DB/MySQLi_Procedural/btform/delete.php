<?php 
    include 'connect.php';
    $category_id = (int)$_GET['category_id'];
    $sql = "DELETE FROM category WHERE category_id = $category_id";
    if (mysqli_query($conn, $sql)) {
        echo 'Xoa thanh cong';
        header("Location: index.php");
    }else{
        die( 'Lỗi: ' . mysqli_error($conn));
    }
?>