<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php  
	// TH 5.8. Thực hiện bài TH 5.6 bằng thuộc tính và phương thức tĩnh
	class Hinhtron{
		private static $bankinh;

		static function getBanKinh(){
			return Hinhtron::$bankinh;
		}
		static function setBanKinh($bankinh){
			Hinhtron::$bankinh=$bankinh;
		}
	}
	Hinhtron::setBanKinh(12);
	echo "Ban kinh hinh tron la: ".Hinhtron::getBanKinh().'<br>';
?>
<?php  
	// TH 5.9. Thực hiện bài TH 5.7­ bằng thuộc tính và phương thức tĩnh
	class Hinhchunhat{
		private static $dai;
		private static $rong;

		static function getDai(){
			return Hinhchunhat::$dai;
		}
		static function setDai($dai){
			Hinhchunhat::$dai=$dai;
		}
		static function getRong(){
			return Hinhchunhat::$rong;
		}
		static function setRong($rong){
			Hinhchunhat::$rong=$rong;
		}
	}
	Hinhchunhat::setDai(20);
	Hinhchunhat::setRong(10);
	echo "Chieu dai hinh chu nhat la: ". Hinhchunhat::getDai().'<br>';
	echo "Chieu rong hinh chu nhat la: ". Hinhchunhat::getRong().'<br>';
?>
</body>
</html>