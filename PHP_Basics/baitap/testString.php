<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Chiều dài</h3>
	<form action="testString.php" method="POST" target="_self">
  		<fieldset>
    		<legend>Personal information:</legend>
    		First name:<br>
    		<input type="text" name="firstname"><br>
    		Last name:<br>
    		<input type="text" name="lastname"><br><br>
    		<input type="submit" value="Submit">
  		</fieldset>
	</form>
	<?php
		if (isset($_POST["firstname"]) || isset($_POST["lastname"])) {
			echo "Hello ".$_POST["firstname"]."&nbsp;".$_POST["lastname"]."<br>";
		}
	?>
	<button type="button" onclick="alert('Hello World!')">Click Me!</button>
	<form action="testString.php" method="POST">
		Nhập tháng: <input type="text" name="thang">
		<input type="submit" value="OK">
	</form>
	<?php
		// $month = month("M");
		switch (isset($_POST["thang"])) {
			case "1":
				echo "January<br>";
				break;
			case "2":
				echo "February<br>";
				break;
			case "3":
				echo "March<br>";
				break;
			case "4":
				echo "April<br>";
				break;
			case "5":
				echo "May<br>";
				break;
			case "6":
				echo "June<br>";
				break;
			case "7":
				echo "July<br>";
				break;
			case "8":
				echo "August<br>";
				break;
			case "9":
				echo "September<br>";
				break;
			case "10":
				echo "October<br>";
				break;
			case "11":
				echo "November<br>";
				break;
			case "12":
				echo "December<br>";
				break;
			default:
				echo "Fail<br>";
				break;
		}
	?>
<!-- Hàm Function -->
	<form action="testString.php" method="POST">
		Nhập số: <input type="text" name="str">
		<input type="submit" value="OK">
	</form>
	<?php 
		function tongN($n){
			$s = 0;
			for ($i=1; $i <= $n ; $i++) 
				$s+=$i;	
			return $s;
		}
		if (isset($_POST["str"])) {
			$str = $_POST["str"];
			echo "Tổng là: ".tongN($str);
		}else{
			echo "Dữ liệu không hợp lệ";
		}
	?>
<!-- Cách 2 -->
<!-- 	<form action="testString.php" method="POST">
		Nhập số: <input type="text" name="so">
		<input type="submit" value="OK">
	</form> -->
	<?php
		// function tongN(int $n){
		// 	$s = 0;
		// 	for ($i=1; $i <= $n ; $i++)
		// 		$s+=$i;
		// 	return $s;
		// }
		// if ($_POST["so"]) {
		// 	$so = $_POST["so"];
		// 	if (is_numeric($N)) {
		// 		echo "Tổng là: ".tongN((int)$so);
		// 	}else{
		// 	echo "Dữ liệu không hợp lệ";
		// 	}
		// }
	?>
	<form action="testString.php" method="POST">
		Nhập số: <input type="text" name="number">
		<input type="submit" value="OK">
	</form>
	<?php 
	$num = (int)$_POST["number"];
	$number = (int)$_POST["number"];

	if ($_POST["number"]) {
		function doDai(){
			global $num;
			return strlen($num);	
		}

		function tong(){
			global $num;
			$sum = 0;
			while ($num > 0) {
				$sum += $num%10;
				$num/=10;
			}
			return $sum;
		}
		function toString(){
			global $num;
		}
		echo "Độ dài: ".doDai()."<br>";
		echo "Tổng: ".tong()."<br>";

	}
		
	
		



		function convert_number_to_words($number) {
 
			$hyphen      = ' ';
			$conjunction = '  ';
			$separator   = ' ';
			$negative    = 'âm ';
			$decimal     = ' phẩy ';
			$dictionary  = array(
			0                   => 'Không',
			1                   => 'Một',
			2                   => 'Hai',
			3                   => 'Ba',
			4                   => 'Bốn',
			5                   => 'Năm',
			6                   => 'Sáu',
			7                   => 'Bảy',
			8                   => 'Tám',
			9                   => 'Chín',
			10                  => 'Mười',
			11                  => 'Mười một',
			12                  => 'Mười hai',
			13                  => 'Mười ba',
			14                  => 'Mười bốn',
			15                  => 'Mười năm',
			16                  => 'Mười sáu',
			17                  => 'Mười bảy',
			18                  => 'Mười tám',
			19                  => 'Mười chín',
			20                  => 'Hai mươi',
			30                  => 'Ba mươi',
			40                  => 'Bốn mươi',
			50                  => 'Năm mươi',
			60                  => 'Sáu mươi',
			70                  => 'Bảy mươi',
			80                  => 'Tám mươi',
			90                  => 'Chín mươi',
			100                 => 'trăm',
			1000                => 'ngàn',
			1000000             => 'triệu',
			1000000000          => 'tỷ',
			1000000000000       => 'nghìn tỷ',
			1000000000000000    => 'ngàn triệu triệu',
			1000000000000000000 => 'tỷ tỷ'
			);
			 
			if (!is_numeric($number)) {
			return false;
			}
			 
			if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
			// overflow
			trigger_error(
			'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
			E_USER_WARNING
			);
			return false;
			}
			 
			if ($number < 0) {
			return $negative . convert_number_to_words(abs($number));
			}
			 
			$string = $fraction = null;
			 
			if (strpos($number, '.') !== false) {
			list($number, $fraction) = explode('.', $number);
			}
			 
			switch (true) {
			case $number < 21:
			$string = $dictionary[$number];
			break;
			case $number < 100:
			$tens   = ((int) ($number / 10)) * 10;
			$units  = $number % 10;
			$string = $dictionary[$tens];
			if ($units) {
			$string .= $hyphen . $dictionary[$units];
			}
			break;
			case $number < 1000:
			$hundreds  = $number / 100;
			$remainder = $number % 100;
			$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
			if ($remainder) {
			$string .= $conjunction . convert_number_to_words($remainder);
			}
			break;
			default:
			$baseUnit = pow(1000, floor(log($number, 1000)));
			$numBaseUnits = (int) ($number / $baseUnit);
			$remainder = $number % $baseUnit;
			$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
			if ($remainder) {
			$string .= $remainder < 100 ? $conjunction : $separator;
			$string .= convert_number_to_words($remainder);
			}
			break;
			}
			 
			if (null !== $fraction && is_numeric($fraction)) {
			$string .= $decimal;
			$words = array();
			foreach (str_split((string) $fraction) as $number) {
			$words[] = $dictionary[$number];
			}
			$string .= implode(' ', $words);
			}
			 
			return $string;
			}


		echo '<b>'.convert_number_to_words($number).'</b>';
	?>
	
<!-- Hàm tính tổng hiệu tích thương của hai số a và b. -->
	<form  action="testString.php" method="POST">
		Nhập a: <input type="number" name="soa">
		Nhập b: <input type="number" name="sob">
		<input type="submit" name="submit" value="OK">
	</form>
	<?php 
		function Tinh(float $a, float $b, &$tong, &$hieu, &$tich, &$thuong){
			$tong=$a+$b;
			$tich=$a*$b;
			$hieu=$a-$b;
			$thuong=$a/$b;
		}
		if (isset($_POST["submit"])) {
			if (empty($_POST["soa"]) || empty($_POST["sob"])) {
				echo "Vui lòng nhập đủ 2 số a và b";
			}else{
				if ($_POST["soa"] || $_POST["sob"]) {
					$a = $_POST["soa"];
					$b = $_POST["sob"];
					Tinh($a, $b, $tong, $hieu, $tich, $thuong);
					echo "Tổng là: " . $tong . "<br>";
					echo "Hiệu là: " . $hieu . "<br>";
					echo "Tích là: " . $tich . "<br>";
					echo "Thương là: " . $thuong . "<br>";
				}
			}
		}
	?>
<!-- Bài tập về mảng -->
	<form method="POST">
		<label>Nhập N phần tử của mảng: </label>
		<input type="number" name="arrlenght"><br>
		<input type="submit" name="submit" value="Thực hiện">
	</form>
	<?php  
		if (isset($_POST['submit'])) {
			$a = array();
			for ($i=0; $i < $_POST['arrlenght'] ; $i++) { 
				$a[$i] = random_int(1, 100);
			}
			echo "<pre>";
			var_dump($a);
			echo "</pre>";
			$tongarray=0;
			$min = $a[0];
			$max = $a[0];
			for ($i=0; $i < count($a); $i++) { 
				$tongarray += $a[$i];
			}
			echo "Tong la: " . $tongarray;
		}
	?>
</body>
</html>