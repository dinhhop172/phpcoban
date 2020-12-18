<?php
	interface Ngua{
		function chayVanToc();
	}

	interface Chim{
		function bayCao();
	}

	class Unicorn implements Ngua, Chim{
		private $vantoc;
		private $chieucao;

		function __construct($vtoc, $chcao){
			$this->vantoc =$vtoc;
			$this->chieucao = $chcao;
		}
		function chayVanToc(){
			echo "co van toc ".$this->vantoc;
		}
		function bayCao(){
			echo ", bay o do cao ".$this->chieucao.'<br>';
		}
		function gioiThieu(){
			echo "Toi la ky lan ";
			$this->chayVanToc(); 
			$this->bayCao();
		}
	}
	$kylan = new Unicorn("40 km/h","500 mét.");
	$kylan->gioiThieu();
	$x = new Unicorn("45 km/h","500 mét.");
	$x->gioiThieu();
	// $y = new Unicorn("45 km/h","600 mét.");
	// $y->gioiThieu();  

?>