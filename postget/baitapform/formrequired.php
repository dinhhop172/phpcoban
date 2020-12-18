<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.colo{
			color: red;
		}
	</style>
</head>
<body>
	<?php  
		$name = $email = $website = $comment = $gender = "";
		$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['name'])) {
				$nameErr = 'Vui long nhap ten';
			}else{
				$name = test_input($_POST['name']);
			}

			if (empty($_POST['email'])) {
				$emailErr = 'Vui long nhap email';
			}else{
				$email = test_input($_POST['email']);
			}

			if (empty($_POST['website'])) {
				$websiteErr = 'Vui long nhap URL';
			}else{
				$website = test_input($_POST['website']);
			}

			if (empty($_POST['comment'])) {
				$commentErr = "";
			}else{
				$comment = test_input($_POST['comment']);
			}

			if (empty($_POST['gender'])) {
				$genderErr = 'Vui long nhap gioi tinh';
			}else{
				$gender = test_input($_POST['gender']);
			}
		}


		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	<h2>PHP Form Validation Example</h2>
	<p><span class="colo">*required</span></p>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
		Name: <input type="text" name="name">
		<span class="colo">*<?php echo $nameErr; ?></span><br><br>
		Email: <input type="email" name="email">
		<span class="colo">*<?php echo $emailErr; ?></span><br><br>
		Website: <input type="text" name="website">
		<span class="colo">*<?php echo $websiteErr; ?></span><br><br>
		Comment: <textarea name="comment" rows="5" cols="30"></textarea><br><br>
		Gender: 
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Other 
			<span class="colo">*<?php echo $genderErr ?></span><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>


	<?php
		echo "<h2>Your Input</h2>";
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