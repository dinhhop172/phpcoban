<?php
// Regex chấp nhận một ký tự bất kì?
// Pattern là ký tự bất kỳ dài từ 3 đến 10 ký tự
$pattern = '/^.{3,10}$/';
$subject = '323/./,2';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex khop ok'."<br>";
}

//Ký tự * 
// kiểm tra chuỗi có phải trống hoặc là gồm các chữ cái thường.
	// Chuỗi có phải trống hoặc có những chữ cái in thường
	$pattern = '/^[a-z]*$/';
	$subject = '';
	if (preg_match($pattern,  $subject)) {
		echo "Chuoi regex so khop"."<br>";
	}
// Ký tự +
// kiểm tra chuỗi có ít nhất một chữ thường
	// chuỗi ít nhất có 1 ký tự chữ thường
	$pattern = '/^[a-z]+$/';
	$subject = 'adadas';
	if (preg_match($pattern, $subject)) {
		echo "Chuoi regex so khop"."<br>";
	}
//Ký tự ?
// Đại diện cho một hoặc không có ký tự nào
	// chuỗi có 1 hoặc không có ký tự thường nào
	$pattern = '/^[a-z]?$/';
	$subject = 'a';
	if (preg_match($pattern, $subject)){
	    echo 'Chuỗi regex so khớp'."<br>";
	}
 // Regex phủ định - NOT
// Ta dùng ký tự ^ để phủ định một Regex nào đó, ví dụ trả về đúng nếu $subject không phải là số.
	// Chuoi không có ký tự số
	$pattern = '/^[^0-9]{1,2}$/';
	$subject = 'da';
	if (preg_match($pattern, $subject)){
	    echo 'Chuỗi regex so khớp qua'."<br>";
	}
// 	Các ký tự Regex đặc biệt
// Danh sách các ký tự Regex đặc biệt như sau:

// \d - Chữ số bất kỳ ~ [0-9]
// \D - Ký tự bất kỳ không phải là chữ số (ngược với \d) ~ [^0-9]
// \w - Ký tự từ a-z, A-Z, hoặc 0-9 ~ [a-zA-Z0-9]
// \W - Ngược lại với \w (nghĩa là các ký tự không thuộc các khoảng: a-z, A-Z, hoặc 0-9) ~[^a-zA-Z0-9]
// \s - Khoảng trắng (space)
// \S - Ký tự bất kỳ không phải là khoảng trắng.
// Ví dụ: kiểm tra một chuỗi là số hoặc không phải là số

// Kiểm tra là số
$pattern = '/\d/';
$subject = '2';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp';
}
 
 
// Kiểm tra không phải là số
$pattern = '/\D/';
$subject = 'dsd';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp';
}
?>