<?php  
	class Hinhtron{
		public $bankinh;

		function __construct($_bankinh){
			$this->bankinh = $_bankinh;
		}
		function dienTich(){
			echo "Dienh tich hinh tron";
		}
		function chuVi(){
			echo "Chu vi hinh tron";
		}
	}

	class Hinhtru extends Hinhtron{
		public $chieudai;

		function __construct($_bankinh, $_chieudai){
			parent::__construct($_bankinh);
			$this->chieudai = $_chieudai;
		}
		function dienTichXungQuanh(){
			echo " Dien tich xung quanh cua hinh tru la: ". 
			(2*pi()* $this->bankinh*$this->chieudai)."<br>";
		}
		function dienTichToanPhan(){
			echo "Dien tich toan phan cua hinh tru la: ". 
			(2*pi()*$this->bankinh*($this->bankinh + $this->chieudai))."<br>";
		}
		function theTichHinhTru(){
			echo "The tich cua hinh tru la: ".
			(pi()*pow($this->bankinh, 2)*$this->chieudai);
		}
	}
	$hinhtru = new Hinhtru(3, 2);
	$hinhtru->dienTichXungQuanh();
	$hinhtru->dienTichToanPhan();
	$hinhtru->theTichHinhTru();
?>