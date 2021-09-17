
    <?php 
        $student = array(
            'Hoang'=>'12cd1',
            'Nguyen'=>'12cd2',
            'Khong'=>'12cd3',
            'Khong'=>'12cd4',
            'Phuong'=>'12cd5'
        );
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Ho ten</th>
                <th>Ho ten</th>
                <th>Lop</th>
                
            </tr>
        </thead>
        <?php 
            $count = 0;
            foreach($student as $key => $value){
            $count++;
        ?>
        <tbody>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
                
            </tr>
        </tbody>
        <?php } ?>
    </table>

</body>
</html>