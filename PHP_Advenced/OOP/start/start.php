<?php
		class Fruit{
				// Properties
				public $name;
				public $color;

				// Methods
				function set_name($name) {
					$this->name = $name;
				}
				function get_name() {
					return $this->name;
				}
				function set_color($color){
					$this->color = $color;
				}
				function get_color(){
					return $this->color;
				}
			}

		$apple = new Fruit();
		// $banana = new Fruit();
		$apple->set_name('Applea');
		// $banana->set_name('Banana');
		$apple->set_color('Blue');

		echo 'Name: '.$apple->get_name();
		echo "<br>";
		echo 'Color: '.$apple->get_color()."<br>";

		echo 'this name: '.$apple->name;

?>