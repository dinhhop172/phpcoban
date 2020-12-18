<?php //
//interface DongVat
//{
//    public function getName();
//}
//interface ConTrau
//{
//    public function checkSung();
//}
//class ConNghe implements DongVat, ConTrau
//{
//    private $name;
//    const SUNG = 'rat cung';
//    public function getName()
//    {
//        return $this->name;
//    }
//    public function setName($_name){
//        $this->name = $_name;
//    }
//    public function checkSung()
//    {
//        return ConNghe::SUNG;
//    }
//}
//$ad = new ConNghe();
//$ad->setName('con nghe dang cuoi');
//echo $ad->getName();
//echo $ad->checkSung();
//
// ?>

<?php
class Fruit {
    public $name = 'asd';
    public $color;
    public $asd = 'Hoang Dinh Hop';
//    public function __construct($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
    public function test()
    {
        echo 'hello nha';
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
    const NAME = 'Nguyen Quang Duc';
    public function message() {
        echo "Am I a fruit or a berry? ";
        echo self::test();
//        echo $this->name;
        echo $this->asd;
    }
    public function getName()
    {
        echo self::NAME;
    }
}

$strawberry = new Strawberry();
$strawberry->message();
$strawberry->intro();
$strawberry->getName();
?>
