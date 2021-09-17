<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$soa = $_POST["soa"];
			$sob = $_POST["sob"];
			$soc = $soa * $sob;
		}
		echo "Ket qua: $soa * $sob = $soc";
	?>
	<form action="index.php">
		<input type="submit" name="" value="Back">
	</form>
</body>
</html>