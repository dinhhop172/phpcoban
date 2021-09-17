<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="post.php">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="btn" value="Login">
	</form>
	<?php  
		if (isset($_POST['btn'])) {
			$username = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';
			if (!$username || !$password) {
				echo "Ban chua nhap du thong tin";
			}elseif($username != 'letstryit' || $password != '26536'){
				echo "Thong tin nhap bi sai";
			}else{
				echo "Dang nhap thanh cong";
			}
		}
	?>
</body>
</html>