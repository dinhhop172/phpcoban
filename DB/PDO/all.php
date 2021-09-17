<?php 
    require "pdo_connect.php";
?>

<?php 
    $name = $phone = $email = "";
    try {
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $pre=$conn->prepare($sql);
        $pre->execute();
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th></tr>";
        while($row=$pre->fetch(PDO::FETCH_ASSOC > 0)){
            echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']
            ."</td><td><a href='all.php?idEdit=".$row['id']."'>Edit</a>
            <a href='all.php?idDelet=".$row['id']."'>Delete</a>
            </td></tr>";
        }
        echo "</table>";

        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $sql="INSERT INTO users(name, phone, email) VALUES(:name, :phone, :email)";
            $pre = $conn->prepare($sql);
            $pre->bindParam(":name", $name, PDO::PARAM_STR);
            $pre->bindParam(":phone", $phone, PDO::PARAM_INT);
            $pre->bindParam(":email", $email, PDO::PARAM_STR);
            $pre->execute();
        }

        if(isset($_GET['idDelet'])){
            $idDelet = isset($_GET['idDelet']) ? $_GET['idDelet'] : '';
            $sql = "DELETE FROM users WHERE id = :id";
            $pre = $conn->prepare($sql);
            $pre->bindParam(':id', $idDelet, PDO::PARAM_INT);
            $pre->execute();
        }

        if(isset($_GET['idEdit'])){
            $idEdit = isset($_GET['idEdit']) ? $_GET['idEdit'] : '';
            $sql = "SELECT * FROM users WHERE id = :id";
            $pre = $conn->prepare($sql);
            $pre->bindParam(':id', $idEdit, PDO::PARAM_INT);
            $pre->execute();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
            }
            if(isset($_POST['update'])){
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $sql = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id = :id";
                $pre = $conn->prepare($sql);
                $pre->bindParam(':id', $idEdit, PDO::PARAM_INT);
                $pre->execute();
            }
        }
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
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
    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php if(isset($_GET['idEdit'])){echo $name;} ?>"><br>
        <label for="">Phone</label>
        <input type="text" name="phone" value="<?php if(isset($_GET['idEdit'])){echo $phone;} ?>"><br>
        <label for="">Email</label>
        <input type="text" name="email" value="<?php if(isset($_GET['idEdit'])){echo $email;} ?>"><br>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="update">Update</button>
        <a href="all.php">Reset</a>
    </form>
</body>
</html>