<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		Chon file: <input type="file" name="fileUp">
		<input type="submit" name="submit">
	</form>
	<?php  
		if (isset($_POST['submit']) && isset($_FILES['fileUp'])) {
			if ($_FILES['fileUp']['error'] > 0) {
				echo "File bi loi";
			}else{
				move_uploaded_file($_FILES['fileUp']['tmp_name'], '../upload/' .$_FILES['fileUp']['name']);
				echo "File upload thanh cong".'<br>';
				echo "Duong dan: upload/".$_FILES['fileUp']['name'].'<br>';
				echo "Loai file: ".$_FILES['fileUp']['type'].'<br>';
				echo "Dung luong: ".((int)$_FILES['fileUp']['size']/1024) .'Kb';
			}
		}
		
	?>
</body>
</html>