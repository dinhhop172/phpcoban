<?php 
include('connect.php');

$sql = "SELECT * FROM product ORDER BY id DESC";
$result = $conn->query($sql);
if ($result -> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo "--Id: ".$row['id'].'<br>'."--Name: "
        .$row['product_name'].'<br>'."--Price: ".$row['price'].'<br>'
        .'-------------'.'<br>';
    }
}
echo '<a href="insert.php">Insert Data</a>'.'<br>';
echo '<a href="delete.php">Delete Data</a>';
?>