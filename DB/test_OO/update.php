<?php 
    include('connect.php');
    $id = $_GET['id_product'];
    $sql = "SELECT * FROM product WHERE id='$id'";
    // $sql = "UPDATE product SET price='43.122' where id='$id'";
    $result = $conn->query($sql);   
    while($row = $result->fetch_assoc()){
        $name = $row['product_name'];
        $price = $row['price'];
    }

    if (isset($_POST['update'])) {
        $namee = $_POST['name'];
        $pricee = $_POST['price'];
        // $sql = "UPDATE category SET category_name = '$catenamee' WHERE category_id = '$cate_id'";
        $sql = "UPDATE product SET product_name = '$namee' price = $pricee WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Update thanh cong";
        }else{
            echo 'Update Failed : ' . $conn->error;
        }
    }
?>
<!-- echo "--Id: ".$row['id'].'<br>'."--Name: "
            .$row['name'].'<br>'."--Price: ".$row['price'].'<br>'
            .'-------------'.'<br>'; -->
<form method="post">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    Price: <input type="text" name="price" value="<?php echo $price; ?>"><br><br>
    <input type="submit" name="update" value="Update Data">
</form>