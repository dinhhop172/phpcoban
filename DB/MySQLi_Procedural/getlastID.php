<?php
    require 'connect.php';
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mas', 'Kola', 'maskola@example.com')";

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo 'inser thanh cong, id cuoi cung duoc insert la: ' . $last_id;
    }else{
        echo "Error: " . $sql .'<br' . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
