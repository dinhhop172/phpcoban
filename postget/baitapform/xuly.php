<?php 
	if (isset($_POST['submit']) && !empty($_POST['submit'])) {
		echo "Xin chào ".htmlspecialchars($_POST['name']);
		echo "<br>";
		echo "Email của bạn là: ".htmlspecialchars($_POST['email']);
		echo "<br>";
		echo "Giới tính của bạn là: ".$_POST['gender'];
	}
?>