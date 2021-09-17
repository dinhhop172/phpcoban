<?php 
    if(isset($_POST['setcookie']) && $_POST['pass']){
        setcookie('user', $_POST['user'], time()+3000);
        setcookie('pass', $_POST['pass'], time()+3000);
        header('location: showcookie.php');
    }

?>

<form action="" method="post">
    User: <input type="text" name="user"><br><br>
    Pass:      <input type="password" name="pass">
    <input type="submit" name="setcookie" value="Set Cookie">

</form>