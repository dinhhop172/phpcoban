<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!-- $new = -> kiem tra..... role() middleware: -> isAdmin,, -> goi controller()
    checkAdmin; same same;; -->
    <!-- // cai -->
    <!-- MVC -->
    <!-- stuff: qua nhieu thu;; -->
    <!--  -->

    <!-- // HOP -->
    <!-- submit/ -->
    <!-- => gui vao request( index.php) -->
    <!-- goi toi controller => admin request -> GET || POST -->
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-header">Form Login</div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['member'])){echo "<div class='alert alert-danger'>".$_SESSION['member']."</div>";} ?>
                        <form action="request/index.php" method="POST">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" id="" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="" name="password">
                            </div>
                            <input type="submit" value="Send" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>
<?php var_dump($_SESSION['member']); ?>