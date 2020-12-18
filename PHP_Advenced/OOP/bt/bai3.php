<?php  
	class Hinhtamgiac{
		public $a;
		public $b;
		public $c;

		function __construct($a, $b, $c){
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
		}
		function dientich(){
			echo "Đây là diện tích hình tam giác <br>";
		}
		function chuvi(){
			echo "Đây là chu vi hình tam giác";
		}
	}
	$hinhtamgiac = new Hinhtamgiac(5, 10, 5);
	$hinhtamgiac->dientich();
	$hinhtamgiac->chuvi();
?>