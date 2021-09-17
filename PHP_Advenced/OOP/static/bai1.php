<?php
	class greeting{
		static function welcome(){
			echo "Hello world";
		}
	}
	class Hello{
		protected $name;
		function message(){
			greeting::welcome();
			$this->name = greeting::welcome();
		}
	}
	$asd = new Hello();
	$asd->message();
?>