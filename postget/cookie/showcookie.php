<?php 

    if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
        echo 'User: '. $_COOKIE['user'] . '<br>';
        echo 'Password: '. $_COOKIE['pass']. '<br>';
        echo "<h3>Do you want to Delete Cookie? </h3>&emsp;";
        echo '<a href="delete.php">Yes</a> &emsp;';
        echo "OR &emsp;";
        echo '<a href="cookieh.php">No</a> (If you choose No, you will turn back home)';
    }else{
        echo "You have not set a cookie";
    }

?>
