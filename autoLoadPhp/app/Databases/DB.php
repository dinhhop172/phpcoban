<?php

namespace App\Databases;

use PDO;

class DB
{
   protected static $instance;

   public static function getInstance()
   {
      if (empty(self::$instance)) {
         echo '123' . '</br>';
         self::$instance = new PDO('mysql:host=localhost;dbname=upload_file', 'root', '');
      }
      return self::$instance;
   }
}
