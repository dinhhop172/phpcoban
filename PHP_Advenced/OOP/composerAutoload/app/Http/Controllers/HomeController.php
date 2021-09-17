<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController
{
   public function index()
   {
      $user = new User();
      $users = $user->getListUser();

      return $users;
   }
}
