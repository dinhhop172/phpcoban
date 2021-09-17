<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
<?php  
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST['name'])) {
			$nameErr = 'Name is required';
		}else{
			$name = test_input($_POST['name']);
		}
		if (empty($_POST['email'])) {
			$emailErr = 'Email is required';
		}else{
			$email = test_input($_POST['email']);
		}
		if (empty($_POST['website'])) {
			$websiteErr = '';
		}else{
			$website = test_input($_POST['website']);
		}
		if (empty($_POST['comment'])) {
			$comment = '';
		}else{
			$comment = test_input($_POST['comment']);
		}
		if (empty($_POST['gender'])) {
			$genderErr = 'Gender is required';
		}else{
			$gender = test_input($_POST['gender']);
		}
	}

	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
	<h2>PHP Form Validation Example</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		Name: <input type="text" name="name">
		<span class="error">*<?php echo "$nameErr"; ?></span><br><br>
		Email: <input type="text" name="email">
		<span class="error">*<?php echo "$emailErr"; ?></span><br><br>
		Website: <input type="text" name="website">
		<span class="error"><?php echo "$websiteErr"; ?></span><br><br>
		Comment: <textarea rows="5" cols="50" ></textarea><br><br>
		Gender: <input type="radio" name="gender">Female
				<input type="radio" name="gender">Male
				<input type="radio" name="gender">Other
				<span class="error">*<?php echo "$genderErr"; ?></span><br>
		<input type="submit" name="sunmit" value="Submit">
	</form>
	<?php 
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $comment;
		echo "<br>";
		echo $gender;
		echo $_SERVER['PHP_SELF'];
	?>
</body>
</html>