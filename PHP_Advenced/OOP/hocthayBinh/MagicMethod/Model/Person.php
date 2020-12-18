<?php 

class Person {
    private $name, $age, $address;

    public function __construct(array $args = []) {
        foreach($args as $key => $value) {
            if(array_key_exists($key, $args)){
                $this->key = $value;
            }else{
                echo "loi roi";
            }
        }
    }
    public function __set($key, $value){
        $this->$key = $value;
    }
    public function __get($key){
        return $this->$key;
    }
    public function __sleep() {
        return array('name', 'age', 'address');
    }

}

?>