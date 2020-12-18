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
		$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
		$name = $email = $website = $comment = $gender = "";

		if (isset($_POST['submit'])) {
				if (empty($_POST['name'])) {
					$nameErr = 'Name is required';
				}else{
					$name = $_POST['name'];
					if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
						$nameErr = 'Only lettets and white space allowed';
					}
				}
				if (empty($_POST['email'])) {
					$emailErr = 'email is required';
				}else{
					$email = $_POST['email'];
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailErr = "Invalid email format";
					}
				}
				if (empty($_POST['website'])) {
					$websiteErr = '';
				}else{
					$website = $_POST['website'];
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
						$websiteErr = 'Invalid URL';
					}
				}
				if (empty($_POST['comment'])) {
					$comment = '';
				}else{
					$comment = $_POST['comment'];
				}
				if (empty($_POST['gender'])) {
					$genderErr = 'Gender is required';
				}else{
					$gender = $_POST['gender'];
				}
			}	
	?>

	<?php
	 	// if (!empty($_POST['submit'])) {
	 	// 	header("location: success.php");
	 	// 	exit();
	 	// }
	 	// if (!empty($name) && !empty($email)){
	 	// 	echo "All done!!! Thank you!!!";
	 	// }
	 ?>
	<h2>PHP Form Validation Example</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="success.php">
		Name: <input type="text" name="name" id="name" value="<?php echo $name;?>">
		<span class="error">*<?php echo $nameErr; ?></span><br><br>
		Email: <input type="email" name="email" id="email" value="<?php echo $email; ?>">
		<span class="error">*<?php echo $emailErr; ?></span><br><br>
		Website: <input type="text" name="website" id="website" value="<?php echo $website; ?>">
		<span class="error">*<?php echo $websiteErr; ?></span><br><br>
		Comment: <textarea name="comment" id="comment" rows="5" cols="5"><?php echo $comment ?></textarea><br><br>
		Gender: 

		<input type="radio" name="gender" id="female" <?php if (isset($gender) && $gender==
      		"female") {echo "checked";}?> value="female">Female   
    	<input type="radio" name="gender" id="male" <?php if (isset($gender) && $gender==
      		"male") echo "checked";?> value="male">Male
    	<input type="radio" name="gender" id="other" <?php if (isset($gender) && $gender==
      		"other") {echo "checked";}?> value="other">Other

		<span class="error">*<?php echo $genderErr ?></span>
		<input type="submit" name="submit" value="Submit" >
		<input type="reset" name="" value="Reset" >
		
	</form>


<!-- 
	  <script type="text/javascript">
	  	function clearform(){
	  		document.getElementById('name').value="";
	  		document.getElementById('email').value="";
	  		document.getElementById('comment').value="";
	  		document.getElementById('website').value="";
	  		document.getElementById('gender').value="";
	  	}
	  </script> -->
	<?php 
		// echo "<h2>Your input: </h2>";
		// echo 'Your name is: '.$name;
		// echo "<br>";
		// echo 'Your email is: '.$email;
		// echo "<br>";
		// echo 'URL: '.$website;
		// echo "<br>";
		// echo 'Your comment is: '.$comment;
		// echo "<br>";
		// echo 'You gender is: '.$gender;
	?>
</body>
</html>