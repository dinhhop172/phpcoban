<?php 
    include('connect.php');
    
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if($result -> num_rows > 0){
     
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
        while($row = $result->fetch_assoc()){
            $id_prod = $row['id'];
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo "<a href='delete.php?id=$id_prod'>Delete</a>" ?></td>
        <td><?php echo "<a href='update.php?id=$id_prod'>Update</a>" ?></td>
        <?php } }?>
    </tr>
    
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
        $sql = "INSERT INTO product (product_name, price) VALUES ('$name', '$price')";
        if ($conn->query($sql) === TRUE) {
            echo "Insert thanh cong";
            header('location: index.php');
        }else{
            echo "Insert Failed: " . $conn->error;
        }
    }
    $conn->close();
?>