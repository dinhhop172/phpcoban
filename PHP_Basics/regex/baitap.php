<?php 
	$pattern = '/^[a-z]+[a-zA-Z0-9\/\.]{8,16}$/';
	$subject = 'matkhaua1234/.';
	if (preg_match($pattern, $subject)) {
		echo "Mat khau chac chan<br>";
	}else{
		echo "mat khau so xai<br>";
	}



	$matkhau = ['matkhaua1234A.', 'matkhaue2', 'matkhau.;'];
	$pa = '/^(?=.*[A-Z])(?=.*\d)(?=.*\W).{8,16}$/';
	foreach ($matkhau as $value) {
		$result = preg_match($pa, $value);
		if ($result) {
			echo "Mat khau dung: => ".$value.'<br>';
		}else{
			echo "Mat khau sai: => ".$value.'<br>';
		}

	}
var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));

// Mật khẩu là tập hợp của các kí tự [a-z], [0-9] và kí tự đặc biệt.
// Mật khẩu tối thiểu phải có 8 kí tự tối đa 16 kí tự
// Mật khẩu bắt buộc phải có ít nhất 1 chữ in hoa, 1 số, 1 kí tự đặc biệt



//Positive Lookbehind
$string = 'thehalfheart@gmail.com, freetuts@facebook.com, thehalfheart@yahoo.com';
preg_match_all('/(?<=thehalfheart)@[^,]+/', $string, $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';

// negative Lookbehind
$string = 'thehalfheart@gmail.com, freetuts@facebook.com, thehalfheart@yahoo.com';
preg_match_all('/(?<!thehalfheart)@[^,]+/', $string, $matches);
echo "<pre>";
print_r($matches);
echo "</pre>";

// Positive Lookahead
$str = 'freetuts@gmail.com thehalfheart@facebook.com hoclaptrinh@yahoo.com freetuts.net@gmail.com';
preg_match_all('/[^\s]+(?=@gmail\.com)/', $str, $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';

// Negative Lookahead
$str = 'freetuts@gmail.com thehalfheart@facebook.com hoclaptrinh@yahoo.com freetuts.net@gmail.com';
preg_match_all('/[^\s]+(?!@gmail\.com)/', $str, $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';


//bai 1
$pat = '/^\w+/';
$str1 = 'The quick brown fox jumps over the lazy dog';
preg_match_all($pat, $str1, $matches);
echo "<pre>";
print_r($matches);
echo "</pre>";
?>