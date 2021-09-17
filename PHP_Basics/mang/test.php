<?php 
    
    $a='1000';
    $b='200';
    $x = true;
    $y = false;
    $c[] = $a > $b;
    print_r('<pre>');
    echo print_r($c);
    print_r('</pre>');

    function asd($hihi){
        $rs = 0;
        for($i = 0; $i<$hihi;$i++){
            $rs += $i;
    }
    return $rs;
    }
    echo asd(5);
    /*
        1+2+
    */
?>