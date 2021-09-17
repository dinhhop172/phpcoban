<?php 
    $txt = "Toi la Hoang Dinh Hop";
    $result = strpos($txt, 'Dinh');
    if($result !== false){ //or === false
        echo "co kq";
    }else{
        echo "not found";
    }
?>