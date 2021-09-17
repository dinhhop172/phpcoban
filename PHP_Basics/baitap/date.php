<?php 
        // var_dump($_GET);
        //list zone
        // $timezone = DateTimeZone::listIdentifiers() ;
        // foreach ($timezone as $value) {
        // 	echo $value ."<br>";
        // }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo date('d/m/Y - H:i:s')."<br>";
        echo date('\B\a\y \g\i\o \l\a H \g\i\o')."<br>";
        $dateint = mktime(0, 0, 0, 3, (21 +12), 2020);
        echo date('d/m/Y', $dateint);
        //Xem ngày mai, tháng tới, năm tới sẽ có ngày tháng năm bao nhiêu.
        $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
	$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
	$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);

?>