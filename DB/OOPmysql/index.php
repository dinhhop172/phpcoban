<?php 
    $conn = new mysqli("localhost", "root", "", "testajax");
    if($conn->connect_error){
        die("Connection failed " . $conn->connect_error);
    }

    $sql = "SELECT * FROM member";
    $result = $conn->query($sql);
    // if($conn->query($sql)===true){
    //     echo "Connection successfully";
    // }else{
    //     echo 'loi'.$sql .'ANDd' . $conn->error ;
    // };
        var_dump($result);
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>