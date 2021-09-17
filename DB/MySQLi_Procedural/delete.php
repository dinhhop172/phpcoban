<?php
    require 'connect.php';

    $sql = 'DELETE FROM myguests 
    WHERE id = 5';
    if(mysqli_query($conn, $sql)){
        echo 'Xoa thanh cong';
    }else{
        echo 'ERROR: ' . mysqli_error($conn);
    }
?>