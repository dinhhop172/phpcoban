<?php  
	abstract class ParentClass{
		abstract function prefixName($name);
	}
	class ChildClass extends ParentClass{
		function prefixName($name, $separator='.', $greet='Dear'){
			if ($name == 'Keira') {
				$prefix = "Mrs";
			}elseif ($name == 'Joe') {
				$prefix = 'Mr';
			}else{
				$prefix = '';
			}
			return "{$greet} {$prefix}{$separator} {$name}";
		}
	}
	$class = new ChildClass;
	echo $class->prefixName('Keira');
	echo "<br>";
	echo $class->prefixName('Joe');
?>