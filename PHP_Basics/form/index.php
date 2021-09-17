<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form  method="post">
		Username: <input type="text" name="name"><br>
		Password: <input type="password" name="pass"><br>
		<input type="submit" name="btn" value="Login">
	</form>
	<?php 
		if (!empty($_POST['btn'])) {
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
			if (!$name || !$pass) {
				echo "Vui long nhap du thong tin";
			}elseif ($name != 'Teo' || $pass != '123') {
				echo "Thong tin dang nhap khong dung";
			}else{
				header("location: welcome.php", false, 307);
				exit();
			}
 		}
	?>
</body>
</html>