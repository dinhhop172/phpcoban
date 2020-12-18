<!DOCTYPE html>
<html>
<head>
	<title>hello world php</title>


	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body {
			background-color: #7ea4b1;
		}
	</style>
</head>
<body>
	<?php 
		echo "Hello World! <br>";
		echo "Ví dụ minh họa trên echo! <br>";
		print "Ví dụ minh họa lệnh print!";
		echo "<p align='center'><font color='blue' size='25px'>Ví dụ lệnh echo trong PHP!</font></p> <br>";
	   	//hoặc
	   	print "<p align='center'><font color='red' size='25px'>Ví dụ lệnh print trong PHP!</font></p>";
	   	echo 'v','i','e','t'; //dùng với 4 tham số
	   	echo ('j'),('a');     //dùng được cả dấu ngoặc cho từng tham số
	 
	   	print 'c';         //đúng
	   	print 'k';'t' ;     //sai
	   	#vi du ve mot comment trong php
	   	print "vi du ve mot dong comment khac <br>";
	   	
	   	print "vi du ve mot comment da dong <br>";
	   	//vi du khac
	   	/* vi du ve comment da dong
	   	website: nbrow.000webhostapp.com
	   	*/
		$four = 2 + 2; // các khoảng trắng đơn
		$four =
		2+
		2; // ví dụ một dòng code có thể được viết trên nhiều dòng
		$vietjack = 98;
        print("Giá trị biến vietjack là: $vietjack<br>");
        print("Giá trị biến VietJack là: $VietJack<br>");
        $greeting = "Chào mừng bạn đến với PHP! <br>";
        print "$greeting";

       	if (3 == 2 + 1)
   		print("Học PHP hay nhất tại VietJack.<br>");
   
		if (3 == 2 + 1)
		{
		   print("Học PHP");
		   print(" hay nhất tại VietJack.<br>");
		}
		$bien_int = 12345;
		$bien_int_khac = -12345 + 12345;
		

	   	$bien_double_1 = 2.2888800;
	   	$bien_double_2 = 2.2111200;
	   	$ket_qua = $bien_double_1 + $bien_double_2;
	   	print ("$bien_double_1 + $bien_double_2 = $ket_qua <br>");


	   	if (999 - 999) {
	   		print("Neu dung se tra ve gia tri true <br>");
	   	} else 
	   		print("Sai se tra ve false <br>");

	   	$var1 = "Hello";
	    $var2 = "hello";
	    echo (strcasecmp($var1, $var2) == 0); // TRUE;
	    echo "<br>";

	    $bien_1 = "name";
	   	$bien_2 = '$bien_1 sẽ không được in!';
	   	print($bien_2);
	   	print "<br>";
	   
	   	$bien_2 = "$bien_1 sẽ được in! <br>";
	   	print($bien_2);


		echo <<<END
		Vi du cu phap "Here Document"
		trong PHP. Day la mot cu phap
		rat huu ich.

		END;print("<br>"); 
		

		$i = "vi du ve minh hoa ve cach trich dan \"dau nhay\"";
		print($i); print("<br>");
		
		$x = "Ví dụ minh họa cách trích dẫn \"dấu nháy\" trong PHP!";
		print $x;print("<br>");

		$x = <<<EOF
		Vi du minh hoa cach trich dan "dau nhay" trong PHP!
		EOF;
		print($x); print("<br>");





	   	 // Nhân giá trị với 11 và trả về kết quả cho lời gọi hàm
		   function hamNhan ($value) {
		      $value = $value * 11;
		      return $value;
		   }
		   
		   $ketqua = hamNhan (11);
		   Print "Giá trị trả về $ketqua\n <br>";



		$bien_toan_cuc = 66;
   
		function hamDemo() {
		GLOBAL $bien_toan_cuc;
		$bien_toan_cuc++;
			      
		print "Giá trị1 biến toàn cục là $bien_toan_cuc<br>";
		}

		hamDemo();
		print "Giá trị2 biến toàn cục là $bien_toan_cuc<br>";



		function ham_demo() {
      	STATIC $count = 3.14;
      	$count++;
      	print $count;
      	print "<br />";
   		}
   
   		ham_demo();
   		ham_demo();
   		ham_demo();



		$txt = "W3Schools.com";
		echo "I love " . $txt . "!";



		$x = 5; // global scope
 
		function myTest() {
		    // using x inside this function will generate an error
		echo "<p>Variable x inside function is: $x</p>";
		} 
		myTest();

		echo "<p>Variable x outside function is: $x</p>";



		class meeting {
 
	    public $name = 'Thach';
	 
	    function hello()
	    {
	        return $this->name . ' saying hello';
	    }
	 
	    function goodbye()
	    {
	        return $this->name . ' saying goodbye';
	    }
		}
		$say = new meeting;
		echo '<pre>';
		var_dump($say);
		echo $say->name . '</br>';
		echo $say->hello() . '</br>';
		echo $say->goodbye() . '</br>';


// Nhân giá trị với 11 và trả về kết quả cho lời gọi hàm.......Tham so ham
		function hamCong ($value){
			$value += 10;
			return $value;
		}
		$result = hamCong(210);	
		print("Gia tri tra ve $result<br>");
//Bien toan cuc
		$btoan_cuc = 2;
		function hamDoMo(){
			GLOBAL $btoan_cuc;
			$btoan_cuc++;
		print("Gia tri bien toan cuc la $btoan_cuc<br>");
		}
		hamDoMo();
//Bien cuc bo
		$x = 10;
   
		function assignx () { 
		   $x = 0;
		   print "Giá trị biến $x bên trong hàm là $x <br />";
		}
		   
		assignx();
		print "Giá trị biến $x bên ngoài hàm là $x. <br />";
//Bien tinh
		function deMo(){
			STATIC $nb1 = 2.96;
			$nb1++;
			print("$nb1<br>");
		}
		deMo();
		deMo();
		deMo();
//Ham constrant trong php
		define("VIETJACK", 98);
   
	   	echo VIETJACK;
	   	echo constant("VIETJACK"); // Kết quả được in như lệnh echo bên trên
	   	print("<br>");

	   	define("ONE", "Ví dụ tên hằng hợp lệ 1");
	   	define("TWO2", "Ví dụ tên hằng hợp lệ 2");
	   	echo constant("TWO2");
	   	print("<br>");
//Lenh if...else trong PHP
	   	$d=date("D");
	   	if ($d=="Sun") {
	   		echo "Chúc cuối tuần vui vẻ!<br>";
	   	}
	   	else
	   		echo "Chúc một ngày vui vẻ!";
//Lệnh elseif trong PHP
	   	$k=date("D");
	   	if ($k=="Fri") {
	   		echo "Chuc cuoi tuan vui ve! <br>";
	   	}
	   	elseif ($k=="Sun") {
	   		echo "Chuc chu nhat vui ve <br>";
	   	}
	   	else
	   		echo "Chuc mot ngay vui ve <br>";
//Lệnh Switch trong PHP
	   	$s=date("D");
	   	switch ($s) {
	   		case 'Mon':
	   			echo "Hôm nay là thứ Hai<br>";
	   			break;
	   		case 'Tue':
	   			echo "Hôm nay là thứ Ba<br>";
	   			break;
	   		case 'Web':
	   			echo "Hôm nay là thứ Tư<br>";
	   			break;
	   		case 'Thu':
	   			echo "Hôm nay là thứ Năm<br>";
	   			break;
	   		case 'Fri':
	   			echo "Hôm nay là thứ Sáu<br>";
	   			break;
	   		case 'Sat':
	   			echo "Hôm nay là thứ Bảy<br>";
	   			break;
	   		case 'Sun':
	   			echo "Hôm nay là Chủ nhật<br>";
	   			break;
	   		default:
	   			echo "Vậy hôm nay là thứ mấy";
	   			break;
	   	}

//Vòng lặp for trong PHP
	   	$a = 0;
        $b = 0;
         
        for( $i=0; $i<5; $i++ ){
           $a += 10;
           $b += 5;
        }
         
        echo ("Sau vòng lặp, giá trị a=$a và b=$b<br>" );
//Vòng lặp While trong PHP
        $i = 0;
        $num = 30;

        while ($i < 10) {
        	$i++;
        	$num--;
        }
        echo "Vòng lặp dừng tại giá trị i = $i và num = $num<br>";
//Vòng lặp do..white trong PHP
        $i = 0;
         
        do{
           $i++;
        }
        while( $i < 10 );
        echo ("Vòng lặp dừng tại giá trị i = $i<br>" );
//Vòng lặp foreach trong php
        $array = array( 1, 2, 3, 4, 5);
         
        foreach( $array as $value )
        {
           echo "Giá trị phần tử mảng là $value <br />";
        }
//gioi thieu ve break trong php
        $i = 0;
         
        while( $i < 10)
        {
           $i++;
           if( $i == 3 )break;
        }
        echo ("Vòng lặp dừng tại giá trị i = $i<br>" );
//lenh continue trong php
        $array = array( 1, 2, 3, 4, 5);
         
        foreach( $array as $value )
        {
           if( $value == 3 )continue;
           echo "Gia tri cua phan tu mang la $value <br />";
        }
        // echo "<h1 align='center'><font color='red' size='30px'>Hahahâhahâh</h1>";
//ham function
        function familyName($fname){
        	echo "$fname Justin.<br>";
        }
        familyName('Bieber');
        familyName('Joe');
        familyName('Mat');
        familyName('Nomel');
        familyName('Jeson');
        //vd2
        function wcv($fname, $year){
        	echo "$fname Vash. Born in $year<br>";
        }
        wcv("Justin", "2000");
        wcv("Khoi", "2001");
        wcv("Hoi", "1999");
        wcv("Hue", "2002");
        wcv("VanhLen", "2000");
        //vd3
        function setheight(int $minHeight = 50){
        	echo "The height is: $minHeight<br>";
        }
        setheight(350);
        setheight();
        setheight(200);
        setheight(100);
        //Ham php, tra ve gia tri
        function sum(int $x, int $y){
        	$z = $x + $y;
        	return $z;
        }
        echo "5 + 5 = " . sum(5, 5) . "<br>";
        echo "10 + 20 = " . sum(10, 20) . "<br>";
        echo "2 + 9 = " . sum(2, 9) . "<br>";
//Mang(Array)
        $cars = array('Volvo', 'BMW', 'Toyota');
        echo "i like " .$cars[0]. ", " .$cars[1]. ", " .$cars[2]. ".<br>";
        echo count($cars);
        echo "<br>";
//in ra cac gia tri co trong mang
        $cars = array('Volvo', 'BMW', 'Toyota');
        $arrlength = count($cars);
        for ($i=0; $i < $arrlength; $i++) { 
        	echo $cars[$i];
        	echo "<br>";
        }
        //vd2
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		echo "Ben is " .$age['Ben']. " years old.<br>";
//Mang lien ket trong php
		$ols = array('Hung' => "20",'Nguyen' => "21",'Nga' => "19");
		echo "This is Hung " .$ols['Hung']. " years old <br>";
//tinh dien tich hinh tron
		$a = 2;
		define("PI", "3.14");
		echo PI * $a*$a;
		echo "<br>";
//Mang lien tuc
		define("animal", ["mew", "chicken", "bird"]);
		echo animal[0];
		echo "<br>";
//hang toan cau
		define("GRETTING", "welcome to vietnam<br>");
		function testM(){
			echo GRETTING;
		}
		testM();
		$int = 292;
		var_dump(is_int($int));

		$int = 432.29;
		var_dump(is_int($int));

//ham var_dump
		$a = [
		    "php",
		    "css",
		    "html"
		];
 
		$b = "freetuts.net";
		 
		$c = 4.58;
		echo "<pre>";
		var_dump($a, $b, $c);
		echo "<pre>";
	?>

	<form id="fo" method="post" action="test.php">
		Nhập chuỗi: <input type="text" name="str" ><br>
		<input type="submit" value="Ok">
	</form>
	<?php
		if (isset($_POST['str'])) {
			$str = $_POST['str'];
			echo 'Chuỗi có độ dài: '.strlen($str)."<br>";
			echo "Số từ trong chuỗi: " .str_word_count($str).'<br>';
			echo 'Chuỗi đảo: '.strrev($str)."<br>";
			echo 'Chuỗi hoa: '.strtoupper($str)."<br>";
		}
		// if (isset($_POST['str']) && isset($_POST['strfind'])) {
		// 	$str = $_POST['str'];
		// 	$strfind = $_POST['strfind'];
		// 	echo "Chuỗi con ở vị trí: " .strpos($str, $strfind);
		// }
	?>
<!-- Tính chu vi tam giác -->
<p>Tính chu vi tam giác</p>
	<form method="post" action="test.php">
		Cạnh 1: <input type="text" name="c1" ><br>
		Cạnh 2: <input type="text" name="c2" ><br>
		Cạnh 3: <input type="text" name="c3" ><br>
		<input type="submit" value="Tính">
	</form>
	<?php
		if (isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3']))  {
			$c1 = $_POST['c1'];
			$c2 = $_POST['c2'];
			$c3 = $_POST['c3'];
			if ($c1+$c2>$c3 && $c1+$c3>$c2 && $c2+$c3>$c1) {
			
				echo "Chu vi tam giác là: ".($c1+$c2+$c3);
			}else{
				echo "Dữ liệu không tạo thành một tam giác, vui lòng nhập lại";
			}
		}
	?>
<!-- Nhập sau đó in ra màn hình -->
    <form action="test.php" method="POST">
       	Họ tên: <input type="text" name="name"/>
       	Tuổi:&emsp;&emsp; <input type="text" name="age"/>
       	<input type="submit" />
    </form>
	<?php
 		if( $_POST["name"] || $_POST["age"] ){
	    	echo "Chào mừng ". $_POST['name']. "<br />";
	    	echo "Bạn ". $_POST['age']. " tuổi.";
 	}
	?>
<!-- Cach 2 -->
	<form method="POST" action="test.php">
		User:&emsp;&emsp;&emsp;&emsp; <input type="text" name="name">
		Password: <input type="password" name="pass">
		<input type="submit" name="" value="Login">
	</form>
	<?php
		if ($_POST["name"] && $_POST["pass"])  {
			echo "Successful login";
		}
	?>
<!-- Cách 3 -->
	<form action="<?php $_PHP_SELF ?>" method="POST">
        Họ tên: <input type="text" name="name" />
        Tuổi: <input type="text" name="age" />
        <input type="submit" />
    </form>

    <?php
   	if( $_POST["name"] || $_POST["age"] )
   	{
      	if (preg_match("/[^A-Za-z'-]/",$_POST['name'] ))
      	{
         	die ("Biến name không hợp lệ - nên là các chữ cái");
		}
      	echo "Chào mừng ". $_POST['name']. "<br />";
      	echo "Bạn ". $_POST['age']. " tuổi.";
      
      	exit();
   	}
	?>
<!-- Cách 4 -->
	<form action="<?php $_PHP_SELF ?>" method="POST">
		<fieldset>
			<legend>Personal information:</legend>
			Họ tên: <input type="text" name="name" />
	        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tuổi: <input type="text" name="age" />
	        <input type="submit" />
		</fieldset>
    </form>

    <?php
   	if( $_REQUEST["name"] || $_REQUEST["age"] )
   	{
      	echo "Chào mừng ". $_REQUEST['name']. "<br />";
      	echo "Bạn ". $_REQUEST['age']. " tuổi.";
      	exit();
   	}
?>
</body>
</html>