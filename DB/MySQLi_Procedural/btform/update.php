<html>
    <head>
    </head>
    <body>
        <h2>-----Nhập để update-----</h2>
<?php 
    require 'connect.php';
    $idUpdate = (int)$_GET['category_id'];  
            $sql = "SELECT * FROM category WHERE category_id = $idUpdate";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ten = $row['category_name'];
                }
            }
            if (isset($_GET['sm'])) {
                $idUpdate = (int)$_GET['category_id'];
                $name = $_GET['name_ca'];
                $sql = "UPDATE category SET category_name = '$name' WHERE category_id='$idUpdate'";
                if (mysqli_query($conn, $sql)) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            }
        
        
?>
        <form method="get">
            <table>
                
                <tr>
                    <th>Name:</th>
                    <td><input type="text" name="name_ca" value="<?php echo $ten;?>"><br></td>
                </tr>
                
            </table>
            <input type="submit" name="sm" value="Update">
        </form>

            

        

    </body>
</html>
<?php
             
