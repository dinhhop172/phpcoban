<?php 
    session_start();
?>
<?php 
    if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
        echo 'User: '. $_SESSION['user'] . '<br>';
        echo 'Password: '. $_SESSION['pass']. '<br>';
        echo "<h3>Do you want to Delete Cookie? </h3>&emsp;";
        echo '<a href="delete.php">Yes</a> &emsp;';
        echo "OR &emsp;";
        echo '<a href="sessionh.php">No</a> (If you choose No, you will turn back home)';
    }else{
        echo "You have not set a Session";
    }
?>