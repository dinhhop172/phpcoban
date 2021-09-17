<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.colo{
			background: #87fffb;
		}
	</style>
</head>
<body>
	<h1>PHP Form Validation Example</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Website: </td>
				<td><input type="text" name="website"></td>
			</tr>
			<tr>
				<td>Comment: </td>
				<td><textarea name="comment" rows="4"></textarea></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td><input type="radio" name="gender" value="male">Male</td>
				<td><input type="radio" name="gender" value="female">Female</td>
				<td><input type="radio" name="gender" value="other">Other</td>
			</tr>
			<tr>
				<th><input class="colo" type="submit" name="submit" value="Submit"></th>
			</tr>
		</table>
	</form>
	<h1>Your Input</h1>

	<?php 
		if (isset($_POST['submit'])) {
			$name = test_input($_POST['name']);
			$email = test_input($_POST['email']);
			$website = test_input($_POST['website']);
			$comment = test_input($_POST['comment']);
			$gender = $_POST['gender'];

			echo htmlspecialchars($name)."<br>";
			echo htmlspecialchars($email)."<br>";
			echo htmlspecialchars($website)."<br>";
			echo htmlspecialchars($comment)."<br>";
			echo $gender;
		}

		function test_input($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
</body>
</html>