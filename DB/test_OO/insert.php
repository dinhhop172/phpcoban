<?php 
    include('connect.php');

    $sql = "INSERT INTO product(product_name, price)
            VALUES ('MacPro', 1.321)";
    if($conn->query($sql) === TRUE){
        echo "Insert thanh cong";
        header('location: select.php');
    }else{
        echo "Insert Failed" . $conn->error;
    }
?>