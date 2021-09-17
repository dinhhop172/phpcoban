<?php
require 'connect.php';
    $sql = "UPDATE myguests SET firstname='Mai', lastname='Diana' WHERE id = 4";
    if (mysqli_query($conn, $sql)) {
        echo 'Update thanh cong';
    }else{
        echo 'ERROR: ' . $sql . mysqli_error($conn);
    }
?>