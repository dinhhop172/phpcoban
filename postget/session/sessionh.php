<?php 
    session_start();
?>

<form action="" method="post">
    User: <input type="text" name="user"><br>
    Pass: <input type="password" name="pass">
    <input type="submit" name="login" value="Set Session">
</form>

<?php 
    if(isset($_POST['login'])){
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];
        header('location: show.php');
    }
?>
