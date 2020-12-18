<?php 
//viet ham
//a. tao mang co n so chinh phuong
//b. In cac giai tri trong mang

function taoMang($n){
	$arr = [];
	// $s=1;
	for ($i=1; $i <= $n; $i++) {
		$arr[] = ($i*2);
	}
	return $arr;
}
function inMang($arr){
	foreach ($arr as $value) {
		echo $value.', ';
	}
}
$arr = taoMang(10);
inMang($arr);

?>