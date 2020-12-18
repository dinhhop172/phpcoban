<?php  
// ========MySqli OO=============
	// $servername = 'localhost';
	// $username = 'root';
	// $password = '';
	// $dbname = 'laravel';

	// //create connection
	// $conn = new mysqli($servername, $username, $password, $dbname);

	// //check connection
	// if ($conn->connect_error) {
	// 	die('Connection failed: '. $conn->connect_error);
	// }
	// echo "Connected successfully<br>";

// ===========MySqli Procedural===========Procedural
// create connect to db
$conn = mysqli_connect('localhost', 'root', '', 'testing1');
	if (!$conn) {
		die('Ket noi that bai: ' . mysqli_connect_error($conn));
	}
	// echo 'Ket noi thanh cong';

?>