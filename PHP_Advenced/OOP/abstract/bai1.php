<?php  
	abstract class Car{
		public $name;
		function __construct($name){
			$this->name = $name;
		}
		abstract function intro() : string;
	}
	class Honda extends Car{
		function intro() : string{
			return "this is {$this->name}";
		}
	}
	class Audi extends Car{
		function intro() : string{
			return "this is {$this->name}";
		}
	}
	class Volvo extends Car{
		function intro():string{
			return "this is {$this->name}";
		}
	}

	$honda = new Honda("Honda");
	echo $honda->intro()."<br>";
	$audi = new Audi("Audi");
	echo $audi->intro()."<br>";
	$volvo = new Volvo("Volvo");
	echo $audi->intro()."<br>";
?>