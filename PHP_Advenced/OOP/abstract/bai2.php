<?php  
	abstract class ParentClass{
		abstract protected function prefixName($name);
	}
	class ChildClass extends ParentClass{
		function prefixName($name){
			if ($name == "Keira") {
				$prefix = 'Mrs.';
			}elseif ($name == 'Joe') {
				$prefix = 'Mr.';
			}else{
				$prefix = '';
			}
			return "{$prefix} {$name}";
		}
	}
	$class = new ChildClass;
	echo $class->prefixName('Joe');
	echo "<br>";
	echo $class->prefixName('Keira');
?>