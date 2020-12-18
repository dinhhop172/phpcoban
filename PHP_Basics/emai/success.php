<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// include_once "testemaivalid.php";

		echo "<h2>Your input: </h2>";
		if (!empty($_POST['name']) && !empty($_POST['email'])){
	 		echo "<h3>All done!!! Thank you!!!This is your information.</h3><br>";
	 	}
		echo 'Your name is: '.$_POST['name'];
		echo "<br>";
		echo 'Your email is: '.$_POST['email'];
		echo "<br>";
		echo 'URL: '.$_POST['website'];
		echo "<br>";
		echo 'Your comment is: '.$_POST['comment'];
		echo "<br>";
		echo 'Your gender is: '.$_POST['gender'].'<br>';

		

	?>
</body>
</html>