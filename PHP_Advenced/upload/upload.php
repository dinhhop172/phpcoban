<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
		<input type="file" name="avatar">
		<input type="submit" name="uploadclick" value="Upload">
	</form>
	<?php  
		//Xu ly Upload
		//Neu nguoi dung click vao upload
		if (isset($_POST['uploadclick'])) {
			//Neu nguoi dung co file de upload
			if (isset($_FILES['avatar'])) {
				//Neu file upload khong bi loi
				//Tuc la thuoc tinh error > 0
				if ($_FILES['avatar']['error'] > 0) {
					echo "File upload bi loi";
				}else{
					//Upload file
					move_uploaded_file($_FILES['avatar']['tmp_name'], './folder/'.$_FILES['avatar']['name']);	
				}
			}else{
				echo "Ban chua chon file";
			}
		}
	?>

</body>
</html>