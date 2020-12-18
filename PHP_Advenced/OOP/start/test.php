<?php  
	// class foo{
	// 	function something(){
	// 		echo __CLASS__; // foo
 //    		var_dump($this);	
	// 	}
	// }

	// class foo_bar extends foo{
	// 	function something(){
	// 		echo __CLASS__; // foo bar
 //    		var_dump($this);	
	// 	}
	// }

	// class foo_bar_baz extends foo_bar{
	// 	function something(){
	// 		echo __CLASS__; //foo_bar_baz
	// 		var_dump($this);
	// 	}
	// 	function call(){
	// 		echo self::something();
	// 		echo parent::something();
	// 		echo foo::something();

	// 	}
	// }

	// error_reporting(-1);

	// $obj = new foo_bar_baz();
	// $obj->call();

?>
<?php
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example.com";	

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
  //check for "example" in mail address
  if(strpos($email, "example") !== FALSE) {
    throw new Exception("$email is an example e-mail");
  }
}

catch (customException $e) {
  echo $e->errorMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}
?>
