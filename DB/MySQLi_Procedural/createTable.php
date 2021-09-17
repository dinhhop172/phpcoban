<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
	//connect db
	require 'connect.php';
// ================================sql to create table======================================
// sql to create table
	$sql = "CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";
	if (mysqli_query($conn, $sql)) {
		echo 'Bang da tao thanh cong';
	}else{
		echo 'Tao bang that bai' . mysqli_error($conn);
	}
	mysqli_close($conn);
    ?>
</body>
</html>