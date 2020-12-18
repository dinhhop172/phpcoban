<?php include('connect.php'); 
    $sql = "CREATE TABLE product (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(100) not null,
        price FLOAT not null,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    }else{
        echo "Create failed ". $conn->error;
    }
?>
