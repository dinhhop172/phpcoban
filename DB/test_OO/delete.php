<form action="" method="get">
    <input type="number" name="id" >
    <input type="submit" name="delete" value="Delete">
    <input type="submit" name="showdata" value="Show Data">
</form>

<button onclick="location.href='insert.php'">Insert Data</button><br>


<?php 
    include('connect.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM product WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Xoa thanh cong <br>";
            $sql = "SELECT * FROM product";
            // $result= $conn->query($sql);
            // print_r($result);
            // $result = $conn->query($sql);
            // while($row = $result->fetch_assoc()){
            //     echo "--Id: ".$row['id'].'<br>'."--Name: "
            //     .$row['name'].'<br>'."--Price: ".$row['price'].'<br>'
            //     .'-------------'.'<br>';
            // }
        }else{
            echo "Xoa ko thanh cong " . $conn->error;
        }
    }
    if (isset($_GET['showdata'])) {
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);
        
        while($row = $result->fetch_assoc()){
            echo "--Id: ".$row['id'].'<br>'."--Name: "
                .$row['product_name'].'<br>'."--Price: ".$row['price']
                . "-----<a href='update.php?id_product=". $row['id'] ."'>Update Data</a><br>";
                // echo "<pre>";
                // print_r($result);
                // echo "<pre>";
            }
    }
?>
<!-- "<a href='update.php?id_product='". $row['id'] ."'></a>" -->