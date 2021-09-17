<?php
  // class A{
  //   function A(){
  //     echo "Lớp A được khởi tạo<br>";
  //   }
  // }
  // class B extends A{
  //   function B(){
  //      parent::A();
  //      echo "Lớp B được khởi tạo";
  //   }
  // }
  // $x = new B();
?>

<?php
    class A{
        private $x;
        function __construct($x){
            $this->x=$x;
        }
        function disp(){
            echo $this->x."<br>";
        }
    }
   class B extends A{
        private $y;
        function B($x,$y){
            parent::__construct($x);
            $this->y=$y;
        }
        function disp(){
            echo $this->y."<br>";
        }
        function display(){
            parent::disp();
            $this->disp();
        }
    }
    $m = new B(2,3);
    $m->display();

?>

