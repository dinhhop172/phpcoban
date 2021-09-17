<?php 
require "pdo_connect.php";
$sql = "SELECT * FROM users";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>phone number</th>
            <th>email</th>
        </tr>
        <?php 
            foreach ($conn->query($sql) as $row){
                echo "<tr>
                        <td>".
                            $row['id'].
                        "</td>
                        <td>".
                            $row['name'].
                        "</td>
                        <td>".
                            $row['phone'].
                        "</td>
                        <td>".
                            $row['email'].
                        "</td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>
<hr>
<?php 
    $id = 1;
    $sql = "SELECT * FROM users WHERE id = ".$conn->quote($id);
    foreach ($conn->query($sql) as $row){
        echo $row['name'] . $row['email'];
    }
?>
<hr>
<?php
    try {
        $id = 2;
        $sql = "SELECT * FROM users WHERE id = :id";
        $pre = $conn->prepare($sql); // chuan bi cau truy van
        $pre->bindParam(':id', $id, PDO::PARAM_INT);
        $pre->execute(); // thuc hien cau truy van
        //do du lieu
        while($row = $pre -> fetch(PDO::FETCH_ASSOC)) {
            echo $row['email'];
        }
    } catch (PDOException $e) {
        echo "Error".$e->getMessage();
    }
    
?>

<?php 
    try {
        $name = "Hoang Dinh Hop";
        $phone = 512451245156;
        $email = "dinhhop@gmail.com";
        $sql = "INSERT INTO users(name, phone, email) VALUES(:name, :phone, :email)";
        $pre = $conn->prepare($sql);
        $pre -> bindParam(":name", $name, PDO::PARAM_STR);
        $pre -> bindParam(":phone", $phone, PDO::PARAM_INT);
        $pre -> bindParam(":email", $email, PDO::PARAM_STR);
        // $pre->execute();
        // if($pre){
        //     echo "inserted successfully";
        // }
    } catch (PDOException $e) {
        echo "Error".$e->getMessage();
    }
?>
<?php 
    try {
        $id = 1;
        $name = "Nhat Minh";
        $email = "nhatminh@gmail.com";
        $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = :id";
        $pre = $conn->prepare($sql);
        $pre->bindParam(':id', $id, PDO::PARAM_INT);
        // $pre->execute();
    // if($pre){
    //     echo "updated successfully";
    // }
    } catch (PDOException $e) {
        echo "error".$e->getMessage();
    }
?>

<?php 
    try {
        $id = 4;
        $sql = "DELETE FROM users WHERE id=:id";
        $pre = $conn -> prepare($sql);
        $pre->bindParam(":id", $id, PDO::PARAM_INT);
        $pre->execute();
        if($pre){
            echo "deleted successfully";
        }
    } catch (PDOException $e) {
        echo "error".$e->getMessage();
    }
?>

