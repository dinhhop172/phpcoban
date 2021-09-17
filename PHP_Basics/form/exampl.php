<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 
		Name: <input type="text" name="name" class="qwe">
		Email:<input type="text" name="email">
		<input type="submit" class="wer">
	</form>
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST["name"]) && isset($_POST["email"])) {
				$name = $_POST["name"];
				$email = $_POST["email"];
			}
			if (empty($name)) {
				echo "Name is empty";
			}else{
				echo "Your name is: $name and $email";
			}
		}
	?>
</body>
</html>