<?php  
	class domain{
		protected static function getWebsiteName(){
			return "Hello Keira";
		}
	}
	class domain2 extends domain{
		public $websiteName;
		function __construct(){
			$this->websiteName = parent::getWebsiteName();
		}
	}
	$domain2 = new domain2();
	echo $domain2->websiteName;
?>