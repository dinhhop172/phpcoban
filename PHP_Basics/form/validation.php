<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title> 
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
</head>
<body>
	
	<?php  
		$nameErr = $passErr = '';
		$username = $password = '';
		if (isset($_POST['btn'])) {
			if (empty($_POST['username'])) {
				$nameErr = 'Vui long nhap username<br>';
			}else{
				$username = $_POST['username'];
				// echo 'Username: '.$username.'<br>';
				if (!preg_match('/^[a-fA-F]*$/', $username)) {
					$nameErr = 'Username có chữ chỉ nằm trong a-f, bao gồm chữ hoa<br>';
				}
			}
			if (empty($_POST['password'])) {
				$passErr = 'Vui long nhap mat khau<br>';
			}else{
				$password = $_POST['password'];
				// echo 'Mật khẩu: '.$password;
				if (!preg_match('/^[a-z0-9]*$/', $password)) {
					$passErr = 'Mật khẩu không được viết hoa và có dấu<br>';
				}
			}
			if (!empty($username) && !empty($password)) {
				echo $username.'<br>'.$password;
			}
		}

	?>



	<h2>Form đăng nhập</h2>
	<form action="" method="post">
		<label for="username">Tên đăng nhập:</label><br>
		<input type="text" name="username" id="username" value="<?php echo $username ?>"><br>
		<span class="err"><?php echo $nameErr; ?></span>
		<label for="pass">Mật khẩu:</label><br>
		<input type="password" name="password" id="pass"><br>
		<span class="err"><?php echo $passErr; ?></span>
		<input type="submit" name="btn" value="Đăng nhập">
	</form>
</body>
</html>