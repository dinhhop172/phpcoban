<?php 
    include('data.php');
    $con = new mysqli("localhost", "root", "", "test");
    $dt =  new database;
    $dt -> select("SELECT * FROM product");
?>
<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table>
    <tr>
        <th>ID</th>
        <th>Ten san pham</th>
        <th>Gia</th>
        <td>Xoa</td>
        <td>Sua</td>
    </tr>
    <?php
        while($row = $dt -> fetch()){
            $id_prod = $row['id'];
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo "<a href='delete.php?id=$id_prod'>Delete</a>" ?></td>
        <td><?php echo "<a href='update.php?id=$id_prod'>Update</a>" ?></td>
    </tr>
    <?php } ?>
</table>
<form action="" method="post">
    Name<input type="text" name="ten"><br>
    Price<input type="text" name="gia">
    <input type="submit" name="btn" value="Insert">
</form>
<?php
    if (isset($_POST['btn'])) {
        $name = $_POST['ten'];
        $price = $_POST['gia'];
        $dt -> command("INSERT INTO product (product_name, price) VALUES ('$name', '$price')");
        header('location: index.php');
    }
?>
<form method="post">
    Search: <input type="text" name="search" placeholder="Search here...">
    <input type="submit" name="btnsear" value="Search">
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Ten san pham</th>
        <th>Gia</th>
    </tr>
    <?php 
    // $sear = new database;
    if(isset($_POST['btnsear'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM product WHERE product_name LIKE '%$search%'";
        $result1 = $con -> query($sql) or die($con->error);
        // $sear -> select("SELECT * FROM product WHERE product_name LIKE %$$search%");
        // while($row1 = $sear -> fetch()){  
        while($row1 = $result1 -> fetch_assoc()){
            echo "Number of rows: " . $result1 -> num_rows;
    ?>
    <tr>
        <th><?php echo $row1['id']; ?></th>
        <th><?php echo $row1['product_name']; ?></th>
        <th><?php echo $row1['price']; ?></th>
    </tr>
    <?php } }?>
</table>