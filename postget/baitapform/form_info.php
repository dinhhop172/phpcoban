<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.col{
			color: red;
		}
	</style>
</head>
<body>

	<?php  
		$name = $ngay = $diem = "";
		$nameErr = $ngayErr = $diemErr = "";

		function test_input($h){
				$h = trim($h);
				$h = stripslashes($h);
				$h = htmlspecialchars($h);
				return $h;
			}

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if (empty($_POST['name'])) {
				$nameErr = 'Họ và tên không được để trống';
			}else{
				$name = isset($_POST['name']) ? ($_POST['name']) : '';
				if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
					$nameErr = "Họ và tên chỉ chứa ký tự và khoảng trắng";
				}
			}
			// $pattern = '/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/';
			if (empty($_POST['ngay'])) {
				$ngayErr = 'Ngày sinh không được để trống';
			}else{
				$ngay = isset($_POST['ngay']) ? ($_POST['ngay']) : '';
				if (!preg_match('/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/', $ngay)) {
					$ngayErr = 'Ngày sinh không đúng';
				}
			}
			if (empty($_POST['diem'])) {
				$diemErr = 'Điểm TB không được để trống';
			}else{
				$diem = isset($_POST['diem']) ? ($_POST['diem']) : '';
				if ($_POST['diem'] > 10) {
					$diemErr = 'Nhập điểm TB từ 0 đến 10';
				}
			}

			
		}	
	?>

	<h1>NHẬP THÔNG TIN</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<table>
			<tr>
				<td>Họ và tên:</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
				<td><span class="col">*<?php echo $nameErr; ?></span></td>
			</tr>
			<tr>
				<td>Ngày sinh:</td>
				<td><input type="text" name="ngay" value="<?php echo $ngay;?>"></td>
				<td><span class="col">*<?php echo $ngayErr; ?></span></td>
			</tr>
			<tr>
				<td>Điểm TB:</td>
				<td><input type="text" name="diem" value="<?php echo $diem;?>"></td>
				<td><span class="col">*<?php echo $diemErr; ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

	<?php 
		if (isset($_POST['submit'])) {
			echo "<h1>Your Information</h1>";
		}
		echo $name.'<br>';
		echo $ngay.'<br>';
		echo $diem.'<br>';
	?>
</body>
</html>