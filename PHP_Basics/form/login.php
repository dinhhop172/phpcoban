<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST['login'])){
				echo "User is: ".$_POST['name'];
				echo "<br>";
				echo "Password is: ".$_POST['pass'];
			}
		}
	?>
</body>
</html>