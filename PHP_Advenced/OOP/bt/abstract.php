<?php  
	// TH 5.10. Sử dụng lớp trừu tượng (abstract)
	abstract class Tinhtoan{
		protected $a;
		protected $b;

		function __construct($a, $b){
			$this->a=$a;
			$this->b=$b;
		}
		abstract function ketQua();
	}
	class Cong extends Tinhtoan{
		function ketQua(){
			return $this->a + $this->b;
		}
	}
	class Tru extends Tinhtoan{
		function ketQua(){
			return $this->a - $this->b;
		}
	}
	class Nhan extends Tinhtoan{
		function ketQua(){
			return $this->a * $this->b;
		}
	}
	class Chia extends Tinhtoan{
		function ketQua(){
			return $this->a / $this->b;
		}
	}
	$cong = new Cong(10, 5);
	echo 'Ket qua phep cong la: '. $cong->ketQua().'<br>';
	$tru = new Tru(10, 5);
	echo 'Ket qua phep tru la: '. $tru->ketQua().'<br>';
	$nhan = new Nhan(10, 5);
	echo 'Ket qua phep nhan la: '. $nhan->ketQua().'<br>';
	$chia = new Chia(10, 5);
	echo 'Ket qua phep chia la: '. $chia->ketQua();
?>