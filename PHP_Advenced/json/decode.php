<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
// hàm json_decode để chuyển mot chuoi json về dạng mảng và object
$json_string = '
			{
				"name" : "Nguyen Van Cuong",
				"email" : "cuongnguyen@gmail.com",
				"website" : "website.com"
			}
		';

//Dang mang
var_dump(json_decode($json_string, true));
echo "<br>";

//Dang object
var_dump(json_decode($json_string));


//Truy cập vào giá trị
$jsonobj = '{
			"Peter": "24",
			"email": "qwer@gmail.com",
			"Joe": "25"
		}';
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->email;
echo $obj->Joe;
?>
</body>
</html>