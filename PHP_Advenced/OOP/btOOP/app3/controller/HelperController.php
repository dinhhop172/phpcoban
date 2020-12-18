<?php

class HelperController
{
    public static $className = 'HelperController';

    // tra ve 1 file view; 1 file giao dien
    public static function render()
    {
        // extract
        echo "Function nay render ra 1 file view -- " . self::$className;
    }

    // tra ve ket qua request
    public static function success()
    {
         echo "Data duoc cap nhat thanh cong - ". self::$className;
    }

}