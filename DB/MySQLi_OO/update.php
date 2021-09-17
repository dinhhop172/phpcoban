
<?php 
    include 'connect.php';
    $cate_id = (int)$_GET['cate_id'];
    $sql = "SELECT * FROM category WHERE category_id = '$cate_id'";
    $result = $conn->query($sql);
    if ($result -> num_rows >0) {
        while ($row = $result -> fetch_assoc()) {
            $catename = $row['category_name'];
        }
    }
    if (isset($_POST['submit'])) {
        $catenamee = $_POST['catename'];
        $sql = "UPDATE category SET category_name = '$catenamee' WHERE category_id = '$cate_id'";
        if ($conn->query($sql) === TRUE) {
                header("Location: index.php");
        }else{
            echo 'Loi: ' . $conn->error;
        }
        $conn->close();
    }
?>
<html>
    <form method="POST">
        Category name: <input type="text" name="catename" value="<?php echo $catename ?>"><br><br>
        <input type="submit" name="submit" id="" value="Update">
    </form>
</html>