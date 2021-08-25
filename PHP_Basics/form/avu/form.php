
<?php
//$input = isset($_POST['input']) ? ($_POST['input']) : '';
//$input1 = str_split($input);
//    foreach($input1 as $element){
//        switch ($element) {
//            case "A":
//            case "a":
//                echo "Ada";
//                break;
//            case "B":
//            case "b":
//                echo "Basic";
//                break;
//            case "c":
//            case "C":
//                echo "Colbo";
//                break;
//            case "D":
//            case 'd':
//                echo "Android";
//                break;
//            case "F":
//            case 'f':
//                echo "Windows phone";
//                break;
//            case "w":
//            case 'W':
//                echo "Hello world";
//                break;
//            default:
//                echo "Nhap a b c d f w";
//        }
//    };
//var_dump($input1);
?>
<?php
    $arr = [
        'a'=>'hello',
        'b'=>'world',
        'c'=>'everyone',
        'd'=>'khong'
    ];
    $input = isset($_POST['input']) ? str_split($_POST['input']) : '';
    $result = "";
    $flag = true;

foreach($input as $item){
    if(isset($arr[strtolower($item)])){
        $result .= $arr[strtolower($item)].' ';
        $flag = true;
    }else{
        echo "Ban da nhap sai, ky tu {$item} khong dung.";
        $flag = false;
        break;
    }
}
if($flag){
    echo $result;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <input type="text" name="input">
    <input type="submit" value="Gui">
</form>
</body>
</html>

