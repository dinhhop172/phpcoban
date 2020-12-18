<?php 
	$pattern = '/hi/';
	$subject = 'hi everyone, hi everybody';
	$replacement = 'hello';
	echo preg_replace($pattern, $replacement, $subject);

	$a = '/(<h1>) | (<\/h1>)/';
	$b = '<h1>Hha XD dasd </h1>';
	$c = '';
	echo preg_replace($a, $c, $b);

	$partern = '/^(<h1>)|(<\/h1>)$/';
	$subject = '<h1>Welcome to freetuts.net</h1>';
	$replacement = '';
	echo preg_replace($partern, $replacement, $subject);


	$partern = '/(<\/?h1>)/';
	$subject = '<h1>Welcome to freetuts.net</h1>';
	$replacement = '';
	echo preg_replace($partern, $replacement, $subject);


?>