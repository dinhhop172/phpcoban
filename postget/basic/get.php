
<?php /*  
	echo 'Dữ Liệu Chúng Tôi Nhận Được Là <br/>';
	foreach ($_GET as $key => $val)
	{
	    echo '<strong>' . $key . ' => ' . $val . '</strong><br/>';
	}
*/ ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tinh tuoiT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="get" action="get.php">
            <input type="text" name="year" value=""/>
            
            <input type="submit" name="btn" value="Tinh tuoi"/>
        </form>
		<?php
		$tuoi = 0;
			if (!empty($_GET['btn'])) {
				//Buoc 1: Lay thong tin
				$year = isset($_GET['year']) ? (int)$_GET['year'] : 0;
				//Buoc 2: lay nam hien tai
				$current_year = date('Y');
				//Bước 3: Kiểm tra năm sinh hợp lệ hay không, nếu không thì thông báo
				if ($year > $current_year) {
					echo "Nan sinh cua ban lon hon nam hien tai, vui long nhap lai";
				}elseif ($year <= 0) {
					echo "Nam sinh khong hop le";
				}else{
					echo "So tuoi cua ban la: ".($current_year - $year);
				}
			}
		?>
    </body>
</html>