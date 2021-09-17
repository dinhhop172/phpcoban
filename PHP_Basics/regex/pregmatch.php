<?php  
if (preg_match('/^[0-9]+$/', '123', $matches)){
    var_dump($matches);
}
if (preg_match('/^[A-Z]+[a-z]+$/', 'ADASDADADasdasdasd', $matches)) {
	var_dump($matches);
}
$pattern = '/abc/';
$subject = 'asdabcasd';
if (preg_match($pattern, $subject)) {
	echo "Chuoi regex so khop<br>";
}else{
	echo "Chuoi regex khong so khop<br>";
}
//Ký tự bắt đầu và kết thúc RegEx
$pattern = '/^takemetoyour$/';
$subject = 'takemetoyour';
if (preg_match($pattern, $subject)) {
	echo "chuoi regex so khop<br>";
}
//Regex kiểm tra có phải chữ cái in thường
// Pattern là chữ cái từ a -> z
$pattern = '/[a-z]/';
$subject = 'd';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp'."<br>";
}
//Regex kiểm tra một chữ cái in hoa tuong tu
//Regex kiểm một so tuong tu
//Regex kiểm một chữ cái in hoa hoặc in thường
// Partern là ký tự in hoa hoặc in thường
$partern = '/[a-zA-Z]/';
$subject = 'fW';
// $subject = 'F';
if (preg_match($partern, $subject)){
    echo 'Chuỗi regex so khớp'."<br>";
}
//Regex kiểm tra một ký tự là số, chữ cái in hoa hoặc in thường
// Pattern là số, ký tự in hoa hoặc in thường
$pattern = '/[a-zA-Z0-9]/';
$subject = 'f';
//$subject = 'F';
//$subject = '9';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp'."<br>";
}
//Regex kiểm tra ký tự có nằm trong dãy không
// Pattern là chữ a hoặc số 2 hoặc chữ b
$pattern = '/[a2b]/';
$subject = 'a';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp'."<br>";
}
//Xác định chiều dài của chuỗi Regex
//Regex kiểm tra là chữ in thường dài từ 5 đến 10 ký tự
$pattern = '/^[a-z]{5,10}$/';
$subject = 'fdsfdsdas';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp qua'."<br>";
}
	$subject = 'Hello "Everybody", welcome to "freetuts.net"';
	preg_match('/"(.+?)"/', $subject, $matches);
	echo '<pre>';
	print_r($matches);
	echo '</pre>';


	$subject = 'Hello "Everybody", welcome to "freetuts.net"';
	preg_match_all('/"(.+?)"/', $subject, $matches);
	echo '<pre>';
	print_r($matches);
	print_r($matches[1]);
	echo '</pre>';
// ----------------------
	$abc = '/tna/';
	$sub = 'tan';
	if (preg_match($abc, $sub)) {
		echo "tan an cut";
	}
?>