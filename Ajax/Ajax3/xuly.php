<?php 
  if(isset($_POST['name']) && isset($_POST['city'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    echo "Hello {$name}, welcome to $city";
  }
?>