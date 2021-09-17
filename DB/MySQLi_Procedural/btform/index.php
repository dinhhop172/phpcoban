<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            /* text-decoration: none; */
            color: red;
        }
    </style>
</head>
<body>
    <h2>Chèn dữ liệu cho table Product</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <table>
            <tr>
                <th>Category name: </th>
                <td><input type="text" name="category_pr"></td>
            </tr>
            <!-- <tr>
                <th>Delete input by id: </th>
                <td><input type="number" name="id" value=""></td>
            </tr> -->
    </table><br>
<a href="delete.php?category_id=<?php echo $row['category_id']?>"></a>
    <input type="submit" name="sm" value="Add">
    <!-- <input type="submit" name="delete" value="Delete"> -->
    <input type="submit" name="display" value="Show and delete data">
    <!-- <input type="button" name="update" value="Update" onclick="location.href='update.php'"> -->
    </form>
    <h2>Dữ liệu hiện có trong table Product</h2>
    <?php 
        function chenDL(){
            require 'connect.php';
            if (isset($_POST['sm'])) {
                $name = isset($_POST['category_pr']) ? $_POST['category_pr'] : false;
                if (empty($name)) {
                    echo 'Vui lòng nhập dữ liệu';
                }else{
                    $sql = "INSERT INTO category (category_name) VALUES ('$name')";
                    if (mysqli_query($conn, $sql)) {
                        $sql = "SELECT * FROM category ORDER BY category_id ASC";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['category_id'] . ' - ' . $row['category_name'] . '<br>';
                            }
                        }else{
                            echo 'Lỗi: ' . mysqli_error($conn);
                        }
                    }else{
                        echo 'Lỗi: ' . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                }
            }
        }
        chenDL();
        xoaDL();
        function xoaDL(){
            require 'connect.php';
            // if (isset($_POST['delete'])) {
            //     if (empty($_POST['id'])) {
            //         echo 'Vui lòng nhập id muốn xóa';
            //     }else{
            //         $id = isset($_POST['id']) ? $_POST['id'] : false;
            //         $sql = "DELETE FROM category WHERE category_id = '$id'";
            //         if(mysqli_query($conn, $sql)){
            //             echo 'Xóa thành công';
            //         }else{
            //             echo 'Lỗi: ' . mysqli_error($conn);
            //         }
            //     }
            // }
            if (isset($_POST['display'])) {
                $display = isset($_POST['display']) ? $_POST['display'] : false;
                $sql = "SELECT * FROM category ORDER BY category_id ASC";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['category_id'] . '-' . $row['category_name'];
                        echo "&emsp;<a href='delete.php?category_id=" . $row['category_id'] . "'>Xoa</a>";
                        echo "&emsp;<a href='update.php?category_id=" . $row['category_id'] . "'>Update</a>" . '<br>';
                    }
                }
            }
            mysqli_close($conn);
        }
        
    ?>

</body>
</html>