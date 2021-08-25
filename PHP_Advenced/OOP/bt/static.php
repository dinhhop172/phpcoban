<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<?php
	// TH 5.8. Thực hiện bài TH 5.6 bằng thuộc tính và phương thức tĩnh
	class Hinhtron
	{
		private static $bankinh;

		static function getBanKinh()
		{
			return Hinhtron::$bankinh;
		}
		static function setBanKinh($bankinh)
		{
			Hinhtron::$bankinh = $bankinh;
		}
	}
	Hinhtron::setBanKinh(12);
	echo "Ban kinh hinh tron la: " . Hinhtron::getBanKinh() . '<br>';
	?>
	<?php
	// TH 5.9. Thực hiện bài TH 5.7­ bằng thuộc tính và phương thức tĩnh
	class Hinhchunhat
	{
		private static $dai;
		private static $rong;

		static function getDai()
		{
			return Hinhchunhat::$dai;
		}
		static function setDai($dai)
		{
			Hinhchunhat::$dai = $dai;
		}
		static function getRong()
		{
			return Hinhchunhat::$rong;
		}
		static function setRong($rong)
		{
			Hinhchunhat::$rong = $rong;
		}
	}
	Hinhchunhat::setDai(20);
	Hinhchunhat::setRong(10);
	echo "Chieu dai hinh chu nhat la: " . Hinhchunhat::getDai() . '<br>';
	echo "Chieu rong hinh chu nhat la: " . Hinhchunhat::getRong() . '<br>';



	abstract class haha
	{
		private $rong;
		abstract protected function hi();
		abstract protected function dai();
		public function FunctionName()
		{
			echo 2;
		}
		public function dasd()
		{
			echo 2;
		}
	}
	interface ha
	{
		public function hu();
	}
	interface he extends ha
	{
		public function o();
	}
	class Animal extends haha implements he
	{
		public function dai()
		{
			echo 2;
		}
		public function hu()
		{
			echo 2;
		}
		public function o()
		{
			echo '2';
		}
		public function hi()
		{
			echo 2;
		}

		public static function whichClass()
		{
			echo "I am an Animal!";
		}

		public function sayClassName()
		{
			$this->whichClass();
		}
	}

	$animalObj = new Animal();
	?>
</body>

</html>