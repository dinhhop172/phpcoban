<?php 
	//Tinh 1 + 1/2 + 1/3...+1/n
	function tinhTong($n){
		$s = 0;
		for ($i=1; $i <= $n; $i++) { 
			$s += (1/$i);
		}
		echo (float)$s;
	}
		tinhTong(2);
 ?>