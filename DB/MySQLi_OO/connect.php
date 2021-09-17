<?php 
    $conn = new mysqli("localhost", "root", "", "testing2");
    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }
?>