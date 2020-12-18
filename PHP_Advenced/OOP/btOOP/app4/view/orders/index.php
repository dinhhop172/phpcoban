<h1>Danh sach order</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Người mua</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Tổng</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $value) {
        echo "<tr>
                    <th>".$value['id']."</th>
                    <td>".$value['productName']."</td>
                    <td>".$value['userName']."</td>
                    <td>".$value['quantity']."</td>
                    <td>".$value['total']."</td>
                </tr>";
    } ?>
<!--    id productName userName quantity total-->
    </tbody>
</table>