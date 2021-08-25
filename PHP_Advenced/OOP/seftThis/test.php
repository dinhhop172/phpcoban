<?php
   //  class Fruit {
   //      // Properties
   //      public $name;
   //      public $color;

   //      // Methods
   //      function set_name($name) {
   //          $this->name = $name;
   //      }
        
   //      function get_name() {
   //          return $this->name;
   //      }
   //  }

   //  $apple = new Fruit();
   //  $banana = new Fruit();
   //  echo $apple->set_name('Apple');
   //  echo $banana->set_name('Banana');

   //  echo $apple->get_name();
   //  echo "<br>";
   //  echo $banana->get_name();

   //  var_dump($apple instanceof Fruit);

$username = isset($_POST['username']) ? $_POST['username'] : null;
$pass = isset($_POST['pass']) ? $_POST['pass'] : null;

if(!empty($username) && !empty($pass)){
   echo 'this is Username '.$username.'<br>';
   echo 'this is Password '.$pass;
}else{
   echo 'vui long nhap du lieu';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="" method="post">
      <input type="text" name="username"><br>
      <input type="password" name="pass">
      <input type="submit" value="Login"/>
   </form>
</body>
</html>