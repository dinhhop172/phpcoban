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
			function intro(){
				echo "The fruit is {$this->name} and the color is {$this->color}.";
			}
		}
		// Strawberry is inherited from Fruit
		class Strawberry extends Fruit{
			function message(){
				echo "Am i a fruit or strawberry?";
			}
		}
		$strawberry = new Strawberry('Strawberry', 'red');
		$strawberry->message();
		$strawberry->intro()
	?>
</body>
</html>