<?php 
    include('data.php');
    $dt = new database;
    $dt -> select("SELECT * FROM product");
    $i = 0;
    while($r = $dt -> fetch()){
        $i++;
        echo "$i ". $r['product_name'] . '&emsp;' .$r['price'] . "<br>";
    }
?>