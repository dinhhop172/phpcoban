<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Input</h2>
	<form action="" method="get">
		Ten: <input type="text" name="name"><br><br>
		Nam sinh: <input type="text" name="born">
		<input type="submit" name="btn">
	</form>
	<h2>Output:</h2>
</body>
</html>


<?php 
	// echo 'Ten: '.$_GET['name'].'<br>';
	// echo "Tuoi".$_GET['age'].'<br>';
	if (!empty($_GET['btn'])) {
		$name = $_GET['name'];
		$born = $_GET['born'];
		$current_year = date("Y");

		if ($born > $current_year) {
			echo "Nam sinh phai nho hon nam hien tai";
		}elseif ($born=="") {
			echo "Vui long nhap nam sinh vao";
		}else{
			echo "Ten: ".$name.'<br>'.'Tuoi: '.($current_year - $born);
		}
		
	}
 ?>