<?php 
	$sv = array(
		array("Hao", 21),
		array("Huan", 23),
		array("Luong", 22)
	);
	for ($i=0; $i < count($sv); $i++) { 
		echo "Sinh vien ";
		for ($j=0; $j < count($sv[$i]); $j++) { 
			echo $sv[$i][$j]." ";
		}
		echo "</br>";
	}
	echo $sv[0];
?>