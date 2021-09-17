<?php

namespace App\Http\Controllers;

use App\Databases\DB;
use App\Interfaces\Notification;
use App\Mail\Mail;
use App\Models\ProductModel;
use App\Traits\Logger;
use App\Traits\UploadImage;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ProductController
{
   use UploadImage, Logger;
   private $product;

   public function __construct(ProductModel $product, Notification $notification)
   {
      $this->product = $product;
      $this->notification = $notification;
   }

   public function getProduct()
   {
      $products = $this->product->listProduct();
      return $products;

      // $str = $this->uploadImage() . ', Logger: ' . $this->logger();
      // return $str;
   }

   public function index()
   {
      // $connectDB = DB::getInstance();
      // $query = $connectDB->prepare("SELECT * FROM users");
      // $query->execute();

      // /* Fetch all of the remaining rows in the result set */
      // $result = $query->fetchAll();
      // echo '<pre>';
      // print_r($result);
      $this->notification->send();
      echo 'send mail success';
      require_once(ROOT_PATH . 'resources/views/home.php');
   }

   public function login()
   {
      $this->notification->send();
      echo 'send mail success';
   }

   public static function hello()
   {
      return 'hello using static';
   }
   // public function uploadImage()
   // {
   //    return 'upload image from ProductController';
   // }
}
