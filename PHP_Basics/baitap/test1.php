<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $bien_double_2 = 2.2111200;
        $bien_double_1 = 2.2888800;
        $ket_qua = $bien_double_1 + $bien_double_2;
               
        print ("$bien_double_1 + $bien_double_2 = $ket_qua <br>");
    ?>
    <form action="test1.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            if (empty($name)) {
                echo "Name is empty";
            }else{  
                echo "Welcome $name <br> Your email is: $email";
            }
        }
    ?>

    <form action="test1.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
<!-- Lay ngay thang nam hien tai -->
    <?php echo date("Y/m/d <br>"); 
    echo "<br>";
    ?>
<!-- php xác thực biểu mẫu -->


<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><script type="text/javascript">alert('hacked')</script>
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
Website: <input type="text" name="website"><br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
Gender: <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
<input type="submit" name="submit" value="Submit">
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $website = test_input($_POST["website"]);
      $comment = test_input($_POST["comment"]);
      $gender = test_input($_POST["gender"]);
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>