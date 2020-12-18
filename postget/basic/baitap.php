<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="baitap.php" method="get">
		<input type="text" name="year">
		<input type="submit" name="btn" value="Mua">
	</form>
	<?php
		$sotuoi;
		if (!empty('btn')) {
			$year = isset($_GET['year']) ? (int)$_GET['year'] : 0;
			$current_year = date('Y');
			if ($year <= 0) {
				echo "Tuoi nhap vao khong hop le";
			}elseif($year > $current_year){
				echo "Nam nhap vao lon hon nam hien tai, nhap lai";
			}else{
				echo "Tuoi cua ban la: ".$sotuoi = $current_year - $year;
			}
		}
		if ($sotuoi <= 18) {
			echo "Hello trau";
		}else{
			echo "Hi";
		}
	?>
</body>
</html>