<?php  
// TH 5.10. Sử dụng interface
	interface Hinh{
		const PI = '3.14';
		 function theTichHinhTru();
		 function dienTichXunhQuanhHinhTru();
	}
	class Hinhtru implements Hinh{
		public $bankinh;
		public $chieudai;

		function __construct($bankinh, $chieudai){
			$this->bankinh=$bankinh;
			$this->chieudai=$chieudai;
		}
		function theTichHinhTru(){
			return Hinh::PI*$this->bankinh*$this->bankinh*$this->chieudai;
			// π. r2. h
		}
		function dienTichXunhQuanhHinhTru(){
			return 2*Hinh::PI*$this->bankinh*$this->chieudai;
			//2πrh
		}
	}
	$hinhtru = new Hinhtru(5, 4);
	echo 'The tich hinh tru la: '.$hinhtru->theTichHinhTru().'<br>';
	echo 'Dien tich xung quanh hinh tru la: '.$hinhtru->dienTichXunhQuanhHinhTru();
?>