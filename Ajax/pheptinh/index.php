<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <title>Document</title>

    <script>
        $(function () {
            $('#button').on('click', function () {
                $txta = $('#txta').val();
                $txtb = $('#txtb').val();
                // $.get('xuly.php', {a:$txta, b:$txtb}, function(data){
                //     $('#ketqua').html(data);
                // });
                $.ajax({
                    url: 'xuly.php',
                    data: {aa:$txta, bb:$txtb},
                    method: 'GET',
                    success: function(result){
                        $('#ketqua').html(result);
                    },
                    error: function(e) {
                        console.log(e);
                    }   
                });
            });
            
        });
    </script>
</head>
<body>
    <input type="text" id="txta">
    <input type="text" id="txtb">
    <input type="button" id="button" value="Gui">
    <h2 id="ketqua"></h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/mcGBVy3-W4s?start=33" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>