<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		class Fruit{
			public $name;
			public $color;

			function __construct($_name, $_color){
				$this->name = $_name;
				$this->color = $_color;
			} 
			protected function intro(){
				echo "The fruit is {$this->name} and the color is {$this->color}.";
			}
		}
		class Mango extends Fruit {
			function message(){
				echo "Am i a fruit or mango. ";
				$this->intro();
			}
		}
		$mango = new Mango('mango', 'yellow');
		$mango->message();
	?>
</body>
</html>