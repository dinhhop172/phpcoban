<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="upLoadFile">
		<input type="submit" name="submit" value="Upload">
	</form>
	<?php  
		if (isset($_POST['submit']) && isset($_FILES['upLoadFile'])) {
			if ($_FILES['upLoadFile']['error']>0) {
				echo "File bi loi";
			}else{
				move_uploaded_file($_FILES['upLoadFile']['tmp_name'], '../upload/'.$_FILES['upLoadFile']['name']);
				echo "Upload thanh cong".'<br>';
				echo "Duong dan: upload/".$_FILES['upLoadFile']['name'].'<br>';
				echo "Loai file: ".$_FILES['upLoadFile']['type'].'<br>';
				echo "Dung luong: ".$_FILES['upLoadFile']['size'].' Bytes';
			}
		}
	?>
</body>
</html>