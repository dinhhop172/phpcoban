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
                $('#body_loading').addClass('loading_box');
                $this = $(this);
                $this.attr('disabled', true);
                $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts',
                    method: 'GET',
                    success: function(result){
                        console.log(result);
                        $txt = '';
                        for(var i = 0; i < result.length; i++){
                            $txt += `<tr>
                                        <td>`+result[i]['userId']+`</td>
                                        <td>`+result[i]['id']+`</td>
                                        <td>`+result[i]['title']+`</td>
                                        <td>`+result[i]['body']+`</td>
                                    </tr>`;
                        }
                        $('tbody').html($txt);
                        $('#body_loading').removeClass('loading_box');
                        $this.attr('disabled', false);
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
    <input type="button" id="button" value="Get data">
    <h2 id="ketqua">dasdasd</h2>

    <table>
        <thead>
            <tr>
                <th>UserId</th>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


    <div id="body_loading" class="">
        <div>
            <span></span>
            <span></span>
        </div>
    </div>
</body>
<style>
    .loading_box {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 870px;
        background-color: none;
        position: absolute;
        top: 0;
        width: 100%;
    }
    
    .loading_box>p {
        font-weight: bold;
        font-size: 30px;
        color: #00ff00;
        display: inline
    }
    
    .loading_box>div {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 400px;
        height: 400px
    }
    
    .loading_box>div>span {
        background-color: transparent;
        height: 190px;
        width: 190px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        border: 20px solid transparent;
        border-bottom: 20px solid red;
        border-top: 20px solid red;
        animation: rotateleft 1.25s infinite ease-in-out;
        position: absolute;
    }
    
    .loading_box>div>span~span {
        background-color: transparent;
        width: 150px;
        height: 150px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        border: 20px solid transparent;
        border-left: 20px solid red;
        border-right: 20px solid red;
        animation: rotateright 1.25s infinite ease-in-out;
        position: absolute;
    }
    
    .loading_box>section {
        position: absolute;
        overflow: hidden;
        animation: words 2.5s infinite ease-in-out;
    }
    
    .loading_box>section>p {
        font-weight: bold;
        color: white;
    }
    
    @keyframes words {
        from {
            width: 0
        }
        to {
            width: 130px
        }
    }
    
    @keyframes rotateleft {
        from {
            transform: rotate(0)
        }
        to {
            transform: rotate(-360deg)
        }
    }
    
    @keyframes rotateright {
        from {
            transform: rotate(0)
        }
        to {
            transform: rotate(360deg)
        }
    }
</style>
</html>