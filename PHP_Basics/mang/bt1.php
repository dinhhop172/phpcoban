<?php  
	function taoMang($n){
		 $arr = [];
		 for ($i=1; $i <= $n; $i++){
		 	$arr[] = $i;
		 }
		return $arr;
	}
	function inMang($arr){
		 	foreach ($arr as $x) {
		 		echo $x.',';
		 	}
		 }
	$arr = taoMang(10);
	inMang($arr);



	function asd($b){
		$a = 2;
	    echo $a + $b;
	}	
	asd(3);
?>