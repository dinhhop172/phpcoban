<?php 
   class Brand{
      public $hello;
      public function asd()
      {
         $this->hello = 'hello';
         echo $this->hello;
      }
   }
   $hello = new Brand();
   $hello->asd();
?>