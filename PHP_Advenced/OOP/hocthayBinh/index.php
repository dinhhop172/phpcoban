<?php 
    require("./MagicMethod/Model/Person.php");
    require("./MagicMethod/Model/FileManager.php");

    

    $nguoi = new Person(array("nam"=>'Vu', "age"=>20, "address"=>'Hue'));
    $obj_to_string = serialize($nguoi);
    var_dump(unserialize($obj_to_string));

    $asd = new FileManager();
    $asd->onWriteFile($obj_to_string);
    $asd->onReadFile();
?>