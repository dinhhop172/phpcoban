<?php 
include('data.php');
$dt = new database;

    $id_prod = $_GET['id'];
    if (isset($_POST['btn'])) {
        $name = $_POST['ten'];
        $price = $_POST['gia'];

        $dt->command("UPDATE product SET product_name = '$name', price = '$price' WHERE id = '$id_prod'");
        header('location: index.php');
    }

    $dt->select("SELECT product_name, price From product WHERE id = '$id_prod'");
    while($row = $dt -> fetch()){
        $namee = $row['product_name'];
        $pricee = $row['price'];
    }
?>
<form action="" method="post">
    Name: <input type="text" name="ten" value="<?php echo $namee; ?>"><br>
    Gia: <input type="number" name="gia" value="<?php echo $pricee; ?>">
    <input type="submit" name="btn" value="Update">
</form>