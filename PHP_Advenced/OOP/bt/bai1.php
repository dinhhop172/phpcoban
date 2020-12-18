<?php  
	class Hinhtron{
		public $bankinh;
		
		function __construct($bankinh){
			$this->bankinh = $bankinh;
		}
		function dienTich(){
			echo "Diện tích là: ".($this->bankinh * $this->bankinh)*3.14."<br>";
		}
		function chuVi(){
			echo "Chu vi là: ".(2*$this->bankinh)*3.14;
		}
	}
	$hinhtron = new Hinhtron(10);
	$hinhtron->dienTich();
	$hinhtron->chuVi();
?>