<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		if (isset($_POST['sm_order'])) {
			$pay = $_POST['pay'];
			echo "$pay";
			if (empty($pay)) {
				echo "Vui long chon phuong thuc thanh toan";
			}
		}

	?>

	<h1>Nhận dữ liệu từ Drop-Down List</h1>
	<form action="" method="post">
		<label for="">Hinh thuc thanh toan</label><br>
		<select name="pay">
			<option value="">--Chọn--</option>
			<option <?php if (!empty($_POST['pay']) && $_POST['pay'] =='cod') {
				echo "selected";} ?> value="cod">Thanh toán tại nhà</option>
			<option <?php if (!empty($_POST['pay']) && $_POST['pay'] =='banking') {
				echo "selected";
			} ?> value="banking">Thanh toán qua thẻ tín dụng</option>
		</select><br><br>
		<input type="submit" name="sm_order" value="Gửi thông tin"><br><br>
		<textarea name="are" rows="5" cols="20"><?php if (isset($_POST['are'])) {
			echo $_POST['are'];
		} ?></textarea><br>
		<input type="submit" name="arew" value="Send">
	</form>


	<?php 
		if (isset($_POST['arew'])) {
			$tarea = $_POST['are'];
			if (empty($tarea)) {
				echo "Vui long nhap du lieu vao";
			}else{
				echo "$tarea";
			}
		}
	 ?>
</body>
</html>