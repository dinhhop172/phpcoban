<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>

</head>

<body>
   So a: <input type="number" id="soa" name='aa'><br>
   So b: <input type="number" id="sob" name='bb'><br>
   <input type="button" value="Gui" id="clickhe">
   <h2 id="kq">..</h2>
</body>

<script>
   $(function() {
      $('#clickhe').on('click', function() {
         $soa = $('#soa').val();
         $sob = $('#sob').val();
         $.ajax({
            url: './tong.php',
            method: 'post',
            data: {
               aa: $soa,
               bb: $sob
            },
            success: function(data) {
               console.log(typeof(data));
               $('#kq').html(data);
            },
            error: function(e) {
               console.log(e);
            }
         })
      })
   })
</script>


</html>