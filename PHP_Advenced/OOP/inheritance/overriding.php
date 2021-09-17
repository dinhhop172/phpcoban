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
				echo "The name is {$this->name} and the color is {$this->color} ";
			}
		}

		class Strawberry extends Fruit{
			public $weight;
			function __construct($_name, $_color, $_weight){
				$this->name = $_name;
				$this->color = $_color;
				$this->weight = $_weight;
			}
			function intro(){
				echo "The name is {$this->name}, the color is {$this->color} and the weight is {$this->weight} ";
			}
		}
		$strawberry = new Strawberry('strawberry', 'red', 50);
		$strawberry->intro();
	?>
</body>
</html>