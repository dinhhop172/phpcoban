<?php 
    // class ConNguoi
    // {
    //     public static $name = 'Hoi lam gi';
    //     public static function getName()
    //     {
    //         //gọi thuộc tính tĩnh
    //         return self::$name;
    //         //hoặc
    //         return ConNguoi::$name;
    //     }
    //     public static function showAll()
    //     {
    //         //gọi phương thức tĩnh
    //         return  self::getName();
    //         //hoặc 
    //         return ConNguoi::getName();
    //     }
    // }
    // //gọi thuộc tính tĩnh
    // ConNguoi::$name;
    // //gọi phương thức tĩnh
    // ConNguoi::showAll();

    class ConNguoi
    {
        private static $name = 'ConNguoi';

        public static function getName()
        {
            echo self::$name;
            echo '<br>';
            echo static::$name;
        }
    }

    ConNguoi::getName();
?>