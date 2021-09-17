<?php 
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die("Connect Failed" . $conn->connect_error);
    }
?>