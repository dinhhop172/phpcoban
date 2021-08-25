<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=pdo", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        //throw $th;
        echo "Connection failed: " . $e->getMessage();
    }
?>