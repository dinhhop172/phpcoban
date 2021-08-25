<?php
$autoloadController = function ($class) {
   $path = $class . '.php';
   if (file_exists($path)) {
      require_once "$path";
      echo $path . '<br>';
   } else {
      echo 'errorcon <br>';
      echo $path . ' loi controller <br>';
      // echo (DIRECTORY_SEPARATOR);
   }
};

// $autoloadModel = function ($class) {
//    $path = $class . '.php';
//    if (file_exists($path)) {
//       require_once "$path";
//       // echo $path;
//    } else {
//       echo 'errorModel <br>';
//       echo $path;
//    }
// };
spl_autoload_register($autoloadController);
// spl_autoload_register($autoloadModel);

// spl_autoload_register(function ($class) {
//    $path = "app";
//    $class = str_replace('App\\', DIRECTORY_SEPARATOR, $class);
//    $file = __DIR__ . DIRECTORY_SEPARATOR . $path;
//    $file = $file . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . 'php';
//    if (file_exists($file)) {
//       // include($file);
//       echo $file;
//    } else {
//       echo 'loi';
//    }
// });
