<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php  
// TH 5.6. Sử dụng getter và setter để đóng gói 
	class Hinhtron{
		private $bankinh;

		function getBanKinh(){
		return $this->bankinh;
		}
		function setBanKinh($bankinh){
			$this->bankinh=$bankinh;
		}
	}
	$hinhtron = new Hinhtron();
	$hinhtron->setBanKinh(10);
	echo "Ban kinh hinh tron la: ".$hinhtron->getBanKinh()."<br>";
?>
<?php  
// TH 5.7. Sử dụng getter và setter để đóng gói 
	class Hinhchunhat{
		private $dai;
		private $rong;

		function getDai(){
			return $this->dai;
		}
		function setDai($dai){
			$this->dai=$dai;
		}
		function getRong(){
			return $this->rong;
		}
		function setRong($rong){
			$this->rong=$rong;
		}
	}
	$hinhchunhat = new Hinhchunhat();
	$hinhchunhat->setDai(20);
	$hinhchunhat->setRong(10);
	echo "Chieu dai hinh chu nhat la: ". $hinhchunhat->getDai()."<br>";
	echo "Chieu rong hinh chu nhat la: ". $hinhchunhat->getRong()."<br>";
?>
</body>
</html>

