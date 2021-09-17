<?php
$a = $_GET['aa'];
$b = $_GET['bb'];
echo $a + $b;

// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";
$aa = ['asd', 'asd', 'asd', 'asd', 'asd'];
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$aop = '[
        {
          "userId": 1,
          "id": 1,
          "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
          "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
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
$asd = json_encode($arr);

$myJSON = json_decode($asd, true);

echo '<pre>';
print_r($myJSON);
echo '</pre>';
foreach ($myJSON as $user) {
    echo ($user);
}
echo '<pre>';
print_r($aop);
echo '</pre>';
$myJSON1 = json_decode($aop, true);
echo '<pre>';
print_r($myJSON1);
echo '</pre>';
// echo 'Day la ket qua: '.$myJSON1[0]->body;
foreach ($myJSON1 as $key => $value) {
    print_r($value['userId']);
}
?>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table>
    <thead>
        <tr>
            <th>userId</th>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($myJSON1 as $key => $value) {
            // echo $value1.'<br>';

        ?>
            <tr>
                <td><?php echo $value['userId'] ?></td>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['title'] ?></td>
                <td><?php echo $value['body'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</html>