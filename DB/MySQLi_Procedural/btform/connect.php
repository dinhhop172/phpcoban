<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'testing1');
    if (!$conn) {
    die('Ket noi that bai: ' . mysqli_connect_error($conn));
    }
?>