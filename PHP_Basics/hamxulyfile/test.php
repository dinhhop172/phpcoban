<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		$read = @fopen('../../index.txt', r);
		//kiem tra xem file co ton tai khong
		if (!$read) {
			echo "Mo file khong thanh cong";
		}else{
			//doc file va tra ve noi dung
			$data = fread($read, filesize('../../index.txt'));
			echo "$data";
		}
	?>
	<?php  
		//Ghi file
		$write = @fopen('../../index.txt', w);
		//kiem tra xem file co ton tai khong
		if (!$write) {
			echo "Mo file khong thanh cong";
		}else{
			$data ="Toi da viet data vao file thanh cong <br>";
			//Ghi file
			fwrite($write, $data);
			// Dong file
			fclose($write);
		}
		if (file_exists('../../index.txt')) {
			echo "file ton tai";
		}
		//lay nooi dung file
		echo file_get_contents('../../index.txt');
		//doi ten file
		// rename('../../indext1.txt','../../index.txt');
	?>
</body>
</html>