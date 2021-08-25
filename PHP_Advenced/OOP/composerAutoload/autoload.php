<?php
$autoloadController = function ($className) {
   $path = $className . '.php';
   if (file_exists($path)) {
      require_once "$path";
      // echo $path . '<br>';
   } else {
      echo '404 NOT FOUND';
   }
};
spl_autoload_register($autoloadController);
// $autoloadModel = function ($className) {
//    $path = 'app/' . $className . '.php';
//    if (file_exists($path)) {
//       include_once "$path";
//    } else {
//       echo '404 NOT FOUND';
//    }
// };


// spl_autoload_register($autoloadModel);
