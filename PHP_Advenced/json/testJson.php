<?php
$json2 = '[
                {
                    "title": "Professional JavaScript",
                    "author": "Nicholas C. Zakas"
                },
                {
                    "title": "JavaScript: The Definitive Guide",
                    "author": "David Flanagan"
                },
                {
                    "title": "High Performance JavaScript",
                    "author": "Nicholas C. Zakas"
                }
            ]';

$json = '[
            {
                "userId": 1,
                "id": 1,
                "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
                "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cumitecto"
            },
            {
                "userId": 1,
                "id": 2,
                "title": "qui est esse",
                "body": "est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"
            },
            {
                "userId": 1,
                "id": 3,
                "title": "ea molestias quasi exercitationem repellat qui ipsa sit aut",
                "body": "et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut"
            },
            {
                "userId": 1,
                "id": 4,
                "title": "eum et est occaecati",
                "body": "ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit"
            }
        ]';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>Hello</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">UserId</th>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
    </tr>
    </thead>
    <tbody>
    <?php
//    header('Content-type: application/json');
    $result = json_decode($json, true);
    var_dump($result);
    echo "</br>";
    echo "</br>";
    foreach($result as $value){
        var_dump($value);
        echo    "
                <tr scope=\"row\">
                    <td>".$value['userId']."</td>
                    <td>".$value['id']."</td>
                    <td>".$value['title']."</td>
                    <td>".$value['body']."</td>
                </tr>";
    }

    ?>
    </tbody>
</table>
</body>
</html>
<?php



//$json1 = '{"a":"hello","b":2,"c":3,"d":4,"e":5}';
//$result1 = json_decode($json1, true);
//var_dump($result1['a']);


//var_dump($result);
