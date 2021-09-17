<?php
    // ================================sql to insert data======================================
    require "connect.php";

    $sql = "INSERT INTO myguests (firstname, lastname, email)
    VALUES ('Dom', 'Mai', 'maidom@gmail.com')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>