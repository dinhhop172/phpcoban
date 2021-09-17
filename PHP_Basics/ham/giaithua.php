<?php 

//Câu 1
	function tinhTong($n){
		$s = 0;
		for ($i=1; $i <= $n; $i++) { 
			$s += (1/$i);
		}
		echo (float)$s;
	}
		tinhTong(2);

echo "<br>";

		//tinh giai thua
	function giaiThua($n){
		$s = 1;
		for ($i=1; $i <= $n-1; $i++) { 
			$s *= ($i+1);
		}
		echo "$i! = ".$s;
	}
	giaiThua(3);
echo "<br>";
//Câu 2:

    $numberFirst = 10;
    $numberSecond = 20;
 
    function swap(&$numFirst, &$numSecond)
    {
        $tmp       = $numFirst;
        $numFirst  = $numSecond;
        $numSecond = $tmp;
    }
 
    swap($numberFirst, $numberSecond);
 
    echo $numberFirst;
    echo $numberSecond;
echo "<br>";
   //Câu 4:
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