<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.err {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
		$name = $email = $website = $content = $gender ='';
		$nameErr = $emailErr = $websiteErr = $contentErr = $genderErr = '';


		if (isset($_POST['btn'])) {
			if (empty($_POST['name'])) {
				$nameErr = 'Nhập tên vô';
				
			}else{
				$name = $_POST['name'];
				if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
					$nameErr = 'Ko số, ký tự đặc biệt';
				}
			}
			if (empty($_POST['email'])) {
				$emailErr = 'nhập vô cả t bả cho bay màu';
			}else{
				$email = $_POST['email'];
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = 'Nhập cho đúng thằng lol kia';
				}
			}
			if (empty($_POST['website'])) {
				$websiteErr = 'Ko được để trống, nhập vô';
			}else{
				$website = $_POST['website'];
				if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
					$websiteErr = 'Nhập cho đúng URL';
				}
			}

			if (empty($_POST['content'])) {
				$contentErr = ''; 
			}else{
				$content = $_POST['content'];
			}

			if (empty($_POST['gender'])) {
				$genderErr = 'Không để trống';
			}else{
				$gender = $_POST['gender'];
			}
		}
	 ?>

	<h2>Input info</h2>
	 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	 	Name: <input type="text" name="name" value="<?php echo $name;?>">
	 		<span class="err">*<?php echo $nameErr; ?></span><br><br>
	 	Email: <input type="email" name="email" value="<?php echo $email;?>">
	 		<span class="err">*<?php echo $emailErr; ?></span><br><br>
	 	Website: <input type="text" name="website" value="<?php echo $website; ?>">
	 		<span class="err">*<?php echo $websiteErr; ?></span><br><br>
	 	Comment: <textarea rows="5" cols="15" name="content"><?php echo $content ?></textarea><br><br>
	 	Gender: <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == 'female') {echo "checked";} ?>>Female
			<input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == 'male') {echo "checked";} ?>>Male
			<input type="radio" name="gender" value="other" <?php if (isset($gender) && $gender =='other') {echo "checked";} ?>>Other
			<span class="err">*<?php echo $genderErr ?></span>
		<input type="submit" name="btn" value="Submit">
	 </form>
	<h2>Output info</h2>
	 <?php 
	 		echo "$name";
	 		echo "<br>";
	 		echo "$email";
	 		echo "<br>";
	 		echo "$website";
	 		echo "<br>";
	 		echo "$content";
	 		echo "<br>";
	 		echo "$gender";

	  ?>
</body>
</html>