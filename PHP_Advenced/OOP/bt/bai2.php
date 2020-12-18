<?php  
	class Hinhchunhat{
		public $dai;
		public $rong;

		function __construct($dai, $rong){
			$this->dai = $dai;
			$this->rong = $rong;
		}
		function dientich(){
			echo "Dien tich hinh chu nhat la: ".$this->dai * $this->rong."<br>";
		}
		function chuvi(){
			echo "Chu vi hinh chu nhat la: ". 2*($this->dai + $this->rong);
		}
	}
	$hinhchunhat = new Hinhchunhat(5, 10);
	$hinhchunhat->dientich();
	$hinhchunhat->chuvi();
?>