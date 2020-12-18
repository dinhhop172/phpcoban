<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <!--MVC : 1 view -> 1 controller -> 1 model -> 1 filter -> 1 respository ->  1 service Fields-->
    <h1>Danh sach users</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Sex</th>
        </tr>
        </thead>
        <tbody>
<!--        40%: cai khung, trien khai hau het ung dung tren cai khung nay... 60%: logic-->
<!-- laravel => .... ... code thuan...-->
        <?php
        foreach ($data as $value) {
            $sex = ($value['sex'] == UserModel::MALE) ? "Nam" : "Nu";
            echo "<tr>
                    <th>".$value['id']."</th>
                    <td>".$value['name']."</td>
                    <td>". $sex ."</td>
                </tr>";
        } ?>
        </tbody>
    </table>
    </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>