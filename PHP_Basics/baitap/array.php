<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- MẢNG ĐA CHIỀU -->
	<?php  
		$cars = array(
			array("Volvo", 22, 18),
			array("Horri", 9, 2),
			array("Gurr", 15, 5),
			array("Lanfs", 29, 25)
		);
		echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
		echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
		echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
		echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>"; 
	?>
	<!-- MẢNG MỘT CHIỀU -->
	<?php  
		$animals = array("dog", "bird", "pig", "horse", "chicken");
		echo "Animals: " . $animals[1] ." ". $animals[2];
	?>
	<!-- MẢNG LIÊN KẾT -->
	<?php  
		$cars = array('volvo' => 12,'lands' => 9, 'teid' => 10);
		foreach ($cars as $key => $value) {
			echo $key . " has " . $value;
			echo "<br>";
		}
	?>
	<?php  
		$cars = array("dog", "bird", "pig", "horse", "chicken");
		$arrlength = count($cars);
		for ($x=0; $x < $arrlength; $x++) { 
			echo $cars[$x];
			echo "<br>";
		}
	?>
</body>
</html>