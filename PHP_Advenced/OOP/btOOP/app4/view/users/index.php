<h1>Danh sach users</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Sex</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $value) {
        $sex = ($value['sex'] == UserModel::MALE) ? "Nam" : "Nu";
        echo "<tr>
                    <th>".$value['id']."</th>
                    <td>".$value['name']."</td>
                    <td>". $sex ."</td>
                </tr>";
    } ?>
    </tbody>
</table>