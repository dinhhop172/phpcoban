<?php  
	class Hinhtron{
		public $bankinh;
		public $name;
		
		function __construct($bankinh){
			$this->bankinh = $bankinh;
		}
		function dienTich(){
			echo "Diện tích là: ".($this->bankinh * $this->bankinh)*3.14."<br>";
		}
		function chuVi(){
			echo "Chu vi là: ".(2*$this->bankinh)*3.14;
		}
		function __destruct()
		{
			echo 'destruct';
		}
	}
	$hinhtron = new Hinhtron(10);
	$hinhtron->dienTich();
	$hinhtron->chuVi();
	$hinhtron->name="hop";
	echo $hinhtron->name;
