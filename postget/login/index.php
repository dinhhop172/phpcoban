<?php include('connect.php'); ?>
<h2>Login</h2>
<form action="" method="POST">
    <label for="">Username</label>
    <input type="text" name="username" value=""><br>

    <label for="">Password</label>
    <input type="password" name="password">

    <input type="submit" name="btn" value="Login">
</form>

<?php 
    if (isset($_POST['btn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "" || $password == ""){
            echo "Vui long dien day du thong tin";
        }else{
            $sql = "SELECT * FROM user WHERE username ='$username' and password='$password'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo "Dang nhap thanh cong";
            }else{
                echo "dang nhap khong thanh cong";
            }
        }
     }
    
?>