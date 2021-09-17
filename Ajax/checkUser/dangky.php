<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <script !src="">
        $(function () {
            $('#username').blur(function () {
                $user = $('#username').val();
                $.ajax({
                    url: 'checkUser.php',
                    data: {name:$user},
                    method: 'GET',
                    success: function (data) {
                        if(data == 0){
                            $('#checkErr').html('hop le');
                        }else {
                            $('#checkErr').html(' khong hop le');
                        }
                        // alert(data);
                    }
                });
            })
        })
    </script>
</head>
<body>
<div class="container">
    <form method="get" role="form">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="" id="username">
            <label for="" id="checkErr"></label>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="pass" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>