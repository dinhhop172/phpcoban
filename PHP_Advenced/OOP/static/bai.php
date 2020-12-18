<?php  
	class someone{
		static function hello(){
			echo "Hello world";
		}
	}
	// someone::hello();
?>
<?php  
	class oob{
		static function uio(){
			echo "Hello everyone";
		}
		function __construct(){
			someone::hello();
			self::uio();
		}
	}
	// $ob = new oob(); 
	// or
	new oob();

?>