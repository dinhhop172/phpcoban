<?php 
   class DoAn
   {
       public static $type;

       public function hello(){
          echo 'day la Doan';
       }
   
       public function echoClass() {
         //   echo self::$type = 'Do An';
         echo self::$type = 'hello';
         // $this->hello();
       }
   }

   // class hhe extends DoAn{
   //    public function echoClass(){
   //       $this->hello();
   //    }
   // }
   $doan = new DoAn();
   $doan->echoClass(); // Do An
   // DoAn::echoClass(); // Do An
?>