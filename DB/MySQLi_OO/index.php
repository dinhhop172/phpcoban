<?php 
    include 'connect.php';
?>
<html>
    <body>
        <h2>Chèn dữ liệu cho bảng Product</h2>
        <form method="get">
            Category: <input type="text" name="cate_name" id=""><br><br>
            <input type="submit" name="sm" value="Add">
            <input type="submit" name="delete" value="Show to Delete and Update data">
        </form>
    </body>
</html>
<h2>Dữ liệu hiện có trong table Product</h2>
<?php 
    if (isset($_GET['sm'])) {
        $name = $_GET['cate_name'];
        if (empty($name)) {
            echo "Vui lòng nhập dữ liệu";
        }else{
            $sql = "INSERT INTO category (category_name) VALUES ('$name')";
            if ($conn->query($sql) === TRUE) {
                $sql = "SELECT * FROM category ORDER BY category_id ASC";
                $result = $conn->query($sql); 
                if ($result -> num_rows > 0) {
                    while ($row = $result -> fetch_assoc()) {
                        echo $row['category_id'] . ' -- ' . $row['category_name'].'<br>';
                    }
                }
            }
        }
    }
    if (isset($_GET['delete'])) {
        $sql = "SELECT * FROM category";
        $result = $conn->query($sql);
        if ($result -> num_rows > 0) {
            while($row = $result->fetch_assoc()){          
                echo $row['category_id'] . ' -- ' . $row['category_name'] .
                "&emsp;<a href='delete.php?cate_id=" .$row['category_id'] . "'>Delete</a>".
                "&emsp;<a href='update.php?cate_id=" .$row['category_id'] . "'>Update</a>".'<br>';
            }
        }
        $conn->close();
    }
    // "<a href='delete.php?cate_id=" .$row['category_id'] . "'></a>";
?>