<?php 
	//Hàm json_encode chuyển một mảng trong PHP hoặc object trong PHP thành chuỗi JSON

		$array = array(
			"name" => "Nguyen Van Cuong",
			"email" => "cuongnguyen@gmail.com",
			"website" => "website.com"
		);
		echo "<br>";
		var_dump(json_encode($array));
?>