<?php 
include('connect.php');

    $id_prod = $_GET['id'];
    if (isset($_POST['btn'])) {
        $name = $_POST['ten'];
        $price = $_POST['gia'];

        $sql = "UPDATE product SET product_name = '$name', price = '$price' WHERE id = '$id_prod'";
        if ($conn->query($sql)) {
            header('location: index.php');
        }else{
            echo 'Update Failed: '.$conn->error;
        }
    }

    $sql1 = "SELECT product_name, price From product WHERE id = '$id_prod'";
    $result = $conn->query($sql1);
    while($row = $result -> fetch_assoc()){
        $namee = $row['product_name'];
        $pricee = $row['price'];
    }
?>
<form action="" method="post">
    Name: <input type="text" name="ten" value="<?php echo $namee; ?>"><br>
    Gia: <input type="number" name="gia" value="<?php echo $pricee; ?>">
    <input type="submit" name="btn" value="Update">
</form>