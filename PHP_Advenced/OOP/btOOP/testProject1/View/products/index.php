<h1>Lists users</h1>
<table class="table table-dark">
    <theader>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Sex</th>
        </tr>
    </theader>
    <tbody>
    <?php
    $data = json_decode($data, true);
    foreach($data as $value){
        echo "<tr>
                <td>".$value['id']."</td>
                <td>".$value['userId']."</td>
                <td>".$value['title']."</td>
                <td>".$value['body']."</td>
              </tr>";
    }?>
    </tbody>
</table>


