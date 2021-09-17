<?php

namespace App\Mail;

use App\Interfaces\Notification;
use PHPMailer\PHPMailer\PHPMailer;

class Mail implements Notification
{
   public function send()
   {
      $mail = new PHPMailer(true);
   }
}
