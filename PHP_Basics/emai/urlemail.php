<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php  
		$name = $email = $website = $comment = $gender = '';
		$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = '';

		if (isset($_POST['btn'])) {
			if (empty($_POST['name'])) {
				$nameErr = 'Name is required';
			}else{
				$name = $_POST['name'];
				if (!preg_match('/^[a-zA-Z ]*$/',$name)) {
					echo "Only lettets and white space allowed";
				}
			}

			if (empty($_POST['email'])) {
				$emailErr = 'Email is required';
			}else{
				$email = $_POST['email'];
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Invalid email format";
				}
			}

			if (empty($_POST['website'])) {
				$websiteErr = '';
			}else{
				$website = $_POST['website'];
				if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
					echo "Invalid URL";
				}
			}

			if (empty($_POST['comment'])) {
				$commentErr = '';
			}else{
				$comment = $_POST['comment'];
			}

			if (empty($_POST['gender'])) {
				$genderErr = '';
			}else{
				$gender = $_POST['gender'];
			}
		}
	?>
	<h2>Enter Information</h2>
	<span class="error">* required field</span><br><br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		Name: <input type="text" name="name" value="<?php echo $name;?>">
		<span class="error">*<?php echo $nameErr;?></span><br><br>
		Email: <input type="email" name="email" value="<?php echo $email;?>">
		<span class="error">*<?php echo $emailErr;?></span><br><br>
		Wensite: <input type="text" name="website" value="<?php echo $website;?>">
		<span class="error">*<?php echo $websiteErr;?></span><br><br>
		Comment: <textarea name="comment"rows="5" cols="20" value="<?php echo $comment;?>"></textarea>
		Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=='female') 	{echo "checked";}?> value='female'>Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=='male'){
				echo "checked";}?> value='male'>Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=='other') {
				echo "checked";}?> value='other'>Other
		<input type="submit" name="btn" value="Submit">
	</form>
	<?php 
		echo "<h2>Your input</h2>";
		echo $name.'<br>';
		echo $email.'<br>';
		echo $website.'<br>';
		echo $comment.'<br>';
		echo $gender.'<br>';
	 ?>
</body>
</html>