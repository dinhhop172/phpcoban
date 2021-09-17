<h1>List products</h1>
<table class="table table-dark">
    <theader>
        <tr>
            <th>UserID</th>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </theader>
    <tbody>
    <?php
    header('content');
    $data = json_decode($data, true);
    foreach($data as $value){
        echo "<tr>
                <td>".$value['userId']."</td>
                <td>".$value['id']."</td>
                <td>".$value['title']."</td>
                <td>".$value['body']."</td>
              </tr>";
    }?>
    </tbody>
</table>


