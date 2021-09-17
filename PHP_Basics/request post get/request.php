<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 
		Name: <input type="text" name="ffname" class="qwe">
		<input type="submit" class="wer">
	</form>
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_REQUEST['ffname'])) {
				$name = $_REQUEST["ffname"];
			}
			if (empty($name)) {
				echo "Name is empty";
			}else{
				echo "Your name is: $name";
			}
		}
	?>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		Name:<input type="text" name="fname">
		Pass:<input type="password" name="fpass">
		<input type="submit">
	</form>
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST['fname']) && isset($_POST['fpass'])) {
				$name = $_POST["fname"];
				$password = $_POST["fpass"];
			}
			if (empty($name) && empty($password)) {
				echo "Please enter a password";
			}else{
				echo "Name:".$name."</br> Pass: ".$password;
			}
		}
	?>
</body>
</html>