<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.colo{
			background: #2eeff2;
		}
	</style>
</head>
<body>
	<h2>Input</h2>
	<form action="" method="post">
		Số a: <input type="number" name="soa" value="<?php echo $_POST['soa'] ?>"><br>
		Số b: <input type="number" name="sob" value="<?php echo $_POST['sob'] ?>"><br><br>
		Chọn phép toán: 
		<input type="radio" name="pheptinh" <?php if (!empty($_POST['pheptinh']) && $_POST['pheptinh'] =='cong') {echo "checked";}?> value="cong">Cộng
		<input type="radio" name="pheptinh" <?php if (!empty($_POST['pheptinh']) && $_POST['pheptinh'] =='tru') {echo "checked";}?> value="tru">Trừ
		<input type="radio" name="pheptinh" <?php if (!empty($_POST['pheptinh']) && $_POST['pheptinh'] =='nhan') {echo "checked";}?> value="nhan">Nhân
		<input type="radio" name="pheptinh" <?php if (!empty($_POST['pheptinh']) && $_POST['pheptinh'] =='chia') {echo "checked";}?> value="chia">Chia<br>
		<input class="colo" type="submit" name="submit" value="Ok">
	</form>
	<h2>Kết quả: </h2>

	<?php 
		if (isset($_POST['submit'])) {
			if (!empty($_POST['pheptinh']) && $_POST['pheptinh'] =='cong') {
				echo 'Kết quả cộng là: '.($_POST['soa'] + $_POST['sob']);
			}elseif (!empty($_POST['pheptinh']) && $_POST['pheptinh'] =='tru') {
				echo 'Kết quả trừ là: '.($_POST['soa'] - $_POST['sob']);
			}elseif (!empty($_POST['pheptinh']) && $_POST['pheptinh'] =='nhan') {
				echo 'Kết quả nhân là: '.($_POST['soa'] * $_POST['sob']);
			}else{
				echo 'Kết quả chia là: '.($_POST['soa'] / $_POST['sob']);
			}
			
		}
	?>
</body>
</html>