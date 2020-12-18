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

    foreach($data as $value){
        $sex = ($value['sex'] == UserModel::MALE) ? "Nam" : "Nu";
        echo "<tr>
                <td>".$value['id']."</td>
                <td>".$value['name']."</td>
                <td>".$sex."</td>
              </tr>";
    }?>
    </tbody>
</table>


