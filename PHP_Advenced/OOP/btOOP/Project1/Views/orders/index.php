<h1>List orders</h1>
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
        echo "<tr>
                <td>".$value['id']."</td>
                <td>".$value['productName']."</td>
                <td>".$value['userName']."</td>
                <td>".$value['quantity']."</td>
                <td>".$value['total']."</td>
              </tr>";
    }?>
    </tbody>
</table>


