
<?php 
	setcookie("username", "binhan", time()+3600)

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if (isset($_COOKIE['username'])) {
		echo $_COOKIE['username'];

		// xóa Cookie đã thiết lập ở trên
		setcookie("username", "", time()-3600);
	}
	// kiểm tra xem cookie đã được bật hay chưa
	if(count($_COOKIE) > 0) {
	    echo "Cookies are enabled.";
	} else {
	    echo "Cookies are disabled.";
	}
	 ?>
</body>
</html>

<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (8), "/");
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>