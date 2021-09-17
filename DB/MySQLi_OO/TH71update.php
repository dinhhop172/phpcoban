<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<h2>Cập Nhật dữ liệu</h2>
	<form method="post">
		<?php
		require "TH71connect.php";
			$id_update = $_GET['id'];
			$query = "SELECT * FROM product WHERE id = '$id_update'";
			$result = $conn->query($query);
			while ($row = $result->fetch_assoc()) {
				$name = $row['name_product'];
			}
			 
		?>
		<label>Category name: </label>
		<input type="text" name="categoryname" value="<?php echo $name;   ?>">
		<input type="submit" name="submit" value="Cập Nhật">
		
	</form>
	

</body>
</html>
	<?php 
		if (isset($_POST['submit'])) {
			$name = $_POST['categoryname'];
			$queryUpdate = "UPDATE product SET name_product = '$name' WHERE id = '$id_update'";
		
			if ($conn->query($queryUpdate) === TRUE) {
    			header("Location: TH71.php", false, 307);
			} else {
    			echo "Error updating record: " . $conn->error;
			}
			$conn->close();
		}
	?>
	