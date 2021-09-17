<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Chon file<input type="file" name="upload">
        <input type="submit" name="submit" value="Upload du lieu">
    </form>
    <?php 
        if(isset($_POST['submit'])){
            if($_FILES['upload']['error'] > 0){
                echo "Upload File bi loi";
            }else{
                move_uploaded_file($_FILES['upload']['tmp_name'], 
                './imgdown' . $_FILES['upload']['name']);
                echo "Upload thanh cong";
                echo "<pre>";
                print_r($_FILES['upload']);
                echo "</pre>";

                $st = "./imgdown" . $_FILES['upload']['name'];
                echo "<br><a href='$st' download>Download ve may</a>";
            }
        }
        
    ?>

</body>
</html>
