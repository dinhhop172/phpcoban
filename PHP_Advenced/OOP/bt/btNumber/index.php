<?php 
class SoHoc {
   private $number1;
   private $number2;

   public function get(){
      return $this->number1;
   }
   public function set($so1){
      $this->number1 = $so1;
   }

   public function getN2(){
      return $this->number2;
   }
   public function setN2($so2){
      $this->number2 = $so2;
   }

   public function inputInfo($number1, $number2){
      $this->number1 = $number1;
      $this->number2 = $number2;
   }
   public function add(){
      $kq = $this->number1 + $this->number2;
      echo $kq.'<br>';
   }
   public function printInfo(){
      echo $this->number1.$this->number2.'<br>';
   }
}

$hello = new SoHoc();
// $hello->set(3);
// echo $hello->get();

$hello->inputInfo(5, 10);
$hello->add();
$hello->printInfo();

?>