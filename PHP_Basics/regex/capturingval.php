<?php  
//Capturing value trong Regular Expression
	preg_match('/([a-z]+)([0-9]+)/', 'freetuts2014', $matches);
	echo '<pre>';
	print_r($matches);
	echo '</pre>';
// Capturing value trong Regular Expression
	// Tìm chuỗi bắt đầu bằng h và kết thúc chữ o
	preg_match('/h(.+)o/', 'hello la xin chao', $matches);
	echo '<pre>';
	print_r($matches);
	echo '</pre>';
// Tìm chuỗi bắt đầu bằng h và kết thúc chữ o
	preg_match('/h(.+?)o/', 'hello la xin chao', $matches);
	echo '<pre>';
	print_r($matches);
	echo '</pre>';


// Kiểm tra chuỗi có phải định dạng năm hay không?
// Pattern đúng nếu là chữ A hoặc chữ B
// Kiểm tra một chuỗi có phải là định dạng năm không,
// Gợi ý: Định dạng năm có 4 ký tự số
$pattern = '/^\d{4}$/';
$subject = '1234';
if (preg_match($pattern, $subject)){
    echo 'Năm đúng'."<br>";
}


// kiểm tra chuỗi có phải là số hay không

$pattern = '/^[0-9]+$/';
$subject = '1312';
if (preg_match($pattern, $subject)){
    echo 'Chuoi la số'."<br>";
}

// kiểm tra chuỗi phải là dạng ngay/thang/nam hay không
$pattern = '/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/';
$subject = '12/10/2014';
if (preg_match($pattern, $subject)){
    echo 'Đúng định dạng ngày tháng năm rồi hâha <br>';
}
$str = "Học lập trình PHP";
$pattern = "/PHP$/";
$result = preg_match($pattern, $str, $matches);
if ($result) {
print( 'Đã tìm thấy <br>' );
print_r ($matches);}

$str = '$Học lập trình -PHP';
$pattern = '/.................../';
$result = preg_match($pattern, $str, $matches);
if ($result) {
print( 'Đã tìm thấy <br>' );
print_r ($matches);
}



$str = 'Hoc lap trinh - PHP 01234';
$pattern = '/[0-9]/';
$result = preg_match_all($pattern, $str, $matches);
if ($result) {
print( 'Đã tìm thấy <br>' );
print_r ($matches);
}

$a = '/^[a-z]+[0-9]+$/';
$b = 'adada31';
if (preg_match($a, $b)) {
	echo "Dung roi";
}else{
	echo "sai";
}


// Lấy chuỗi nằm giữa 2 dấu [ và ]
$subject = "Chuỗi cần lấy là [chuỗi này] mọi người";
$pattern = '/\[(.+)\]/';
if (preg_match($pattern, $subject, $matches)){
    // kêt quả matches sẽ có 2 phần tử
    // phần tử thứ nhất là toàn regex =>  "[chuỗi này]"
    // chuỗi thứ 2 là kết quả đoạn regex bên trong dấu () => "chuỗi này"
    echo "kết quả toàn chuỗi là: <br/>";
    echo '<pre>';
    print_r($matches);
    echo '</pre>';
     
    echo "Kết quả muốn lấy là: <br/>";
    echo $matches[1];
}


$username = ['taikhoan134', 'taikhoan 1234', 'taikhoandaihon20kitulasai'];
 
$pattern = "/^[a-z][a-z0-9_\.]{4,20}$/";
 
foreach ( $username as $val ) {
	
	$result = preg_match ($pattern, $val);
	if ( $result ) {
		printf( "Tài khoản: %s =>  Đúng </br>", $val );
	} else {
		printf( "Tài khoản: %s =>  Sai </br>", $val );
	}
}
?>