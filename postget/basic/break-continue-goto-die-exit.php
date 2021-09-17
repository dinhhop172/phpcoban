<?php
//break
	for ($i=0; $i < 100; $i++) { 
		echo "$i ";
		if ($i == 20) {
			break;
		}
	}
	echo "<br>";
//continue
	for ($i = 1; $i <= 10; $i++){
	    if ($i == 5){
	        continue;
	    }
    echo $i . ' ';
	}
	echo "<br>";

$fp = @fopen('../index.txt', r);
//kiem tra xem mo file thanh cong khong
	if (!$fp) {
		echo "Mo file khong thanh cong";
	}else{
		//lap qua tung ky tu de doc
		while (!feof($fp)) {
			echo fgetc($fp);
		}
	}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
	Username: <input type="text" name="name" value=""><br>
	Password: <input type="password" name="password" value=""><br>
	<input type="submit" name="btn" value="Login"> 
</form>
<?php  
	if (isset($_POST['btn'])) {
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		if (!$name || !$password ) {
			echo "Vui long dien thong tin";
		}elseif ($name !== 'dinhhop' || $password !== '12345')  {
			echo "Tai khoan khong co that";
		}else{
			echo "Dang nhap thanh cong";
		}
	}
?>