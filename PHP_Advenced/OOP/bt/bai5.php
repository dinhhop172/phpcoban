<?php  
	class Hinhchunhat{
		public $dai;
		public $rong;

		function __construct($_dai, $_rong){
			$this->dai = $_dai;
			$this->rong = $_rong;
		}
		function dienTich(){
			echo "Dien tich hinh chu nhat";
		}
		function chuVi(){
			echo "Chu vi hinh chu nhat";
		}
	}

	class Hinhhop extends Hinhchunhat{
		public $cao;

		function __construct($_dai, $_rong, $_cao){
			parent::__construct($_dai, $_rong);
			$this->cao = $_cao;
		}
		function dienTichXungQuanh(){
			echo "Dien tich xung quanh hinh hop chu nhat la: ".
			2*$this->cao*($this->dai + $this->rong)."<br>";
		}
		function dienTichToanPhan(){
			echo "Dien tich toan phan hinh hop chu nhat la: ". 
			(2*$this->cao*($this->dai + $this->rong) + (2*$this->dai*$this->rong))."<br>";
		}
		function theTich(){
			echo "The tich hinh hop chu nhat la: ". 
			$this->dai*$this->rong*$this->cao;
		}
	}
	$hinhhop = new Hinhhop(3, 2, 2);
	$hinhhop->dienTichXungQuanh();
	$hinhhop->dienTichToanPhan();
	$hinhhop->theTich();
?>