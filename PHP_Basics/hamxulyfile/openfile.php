<?php  
	// echo readfile('web.txt');
?>
<?php 
	$myfile = fopen('web.txt', 'r')or die("Unable to open file!");
	// echo fread($myfile, filesize('web.txt'));
	// echo fgets($myfile).'<br>';
	while(!feof($myfile)) {
	  echo fgets($myfile) . "<br>";
	}
	fclose($myfile);
	$myfile = fopen("testfile.txt", "w")
 ?>