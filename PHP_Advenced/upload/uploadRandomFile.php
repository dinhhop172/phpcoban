<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <title>Document</title>


</head>

<body>
    <p>THis is aaaaaaaaa</p>
    <div id="content">...</div>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="hinhAvatar">
        <input type="submit" value="Upload" name="upload">
    </form>
</body>
<script>
    $(function() {
        // $('#content').on('click', function() {
        //     $a = $(this).load('b.php');
        // });
        $.get("b.php", {ho:"TeoNguyen"}, function(data) {
            $('#content').html(data);
        });
    });
</script>

</html>

<?php
function randomSo() {
    $mang = array();
    for($i=0;$i<=100;$i++) {
        array_push($mang, $i);
    }
    return $mang[array_rand($mang)];
}
$convert = randomSo();
echo "$convert";
echo "<pre>";
// print_r($_FILES['hinhAvatar']);
echo "</pre>";
if(isset($_POST['upload'])) {
    $name = $_FILES['hinhAvatar']['name'];
    move_uploaded_file($_FILES['hinhAvatar']['tmp_name'], "upload/"."$convert"."$name");
}
?>