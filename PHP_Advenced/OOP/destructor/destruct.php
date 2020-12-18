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
			function __destruct(){
				echo "The fruit is {$this->name} and the color {$this->color}.";
			}
		}
		$banana = new Fruit('Banana', 'Yellow');
	?>
</body>
</html>