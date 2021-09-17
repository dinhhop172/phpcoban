<form action="" method="post">
    <h3>Giai cac phuong trinh bac hai ax<sub>2</sub> + bx + c = 0</h3>
    Nhap cac he so: 
    a = <input type="number" name="a" size="5">
    b = <input type="number" name="b" size="5">
    c = <input type="number" name="c" size="5">
    &ensp;<input type="submit" name="giai" value="Giai phuong trinh">
</form><br>

<?php 
    class phuongtrinhbac2{
        protected $a = 1;
        protected $b = 3;
        protected $c = 2;

        private function delta(){
            return pow($this->b, 2) - 4 * $this->a*$this->c;
        }
        protected function giai(){
            if($this->delta() < 0){
                echo "Phuong trinh vo nghiem";
            }elseif($this->delta() == 0){
                echo "Phuong trinh co mot nghiem kep: x<sub>1</sub>=x<sub>2</sub>=". -$this->b/2*$this->a;
            }else{
                // echo "Phuong trinh co 2 nghiem phan biet: x<sub>1</sub> = " . "";
                $x1 = (-$this->b+sqrt($this->delta()))/2*$this->a;
                $x2 = (-$this->b-sqrt($this->delta()))/2*$this->a;
                echo "Phuong trinh co 2 nghiem phan biet: <br>";
                echo "x<sub>1</sub>= $x1 --- x<sub>2</sub>= $x2";
            }
        } 
    }
    class phuongtrinh extends phuongtrinhbac2{
        public function gpt(){
            return $this->giai();
        }
        public function seta($_a){
            $this->a = $_a;
        }
        public function setb($_b){
            $this->b = $_b;
        }
        public function setc($_c){
            $this->c = $_c;
        }
    }
    $tinh = new phuongtrinh;
    if(isset($_POST['giai'])){
        $tinh->seta($_POST['a']);
        $tinh->setb($_POST['b']);
        $tinh->setc($_POST['c']);
        echo $tinh->gpt();
    }
    
    
?>
    
