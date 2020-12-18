<?php 
    include 'connect.php';
    $cate_id = $_GET['cate_id'];
    $sql = "DELETE FROM category WHERE category_id = '$cate_id'";
    if ($conn->query($sql)) {
        header('Location: index.php');
    }else{
        die("Có lỗi: " . $conn->error);
    }
?>