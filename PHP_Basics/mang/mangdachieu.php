
    <?php 
        $Teach = array(
            "Front-End" => array(
                "HTML" => "23000",
                "CSS" => "23000",
                "JavaScript" => "23000",
                "JQuery" => "23000",
            ),
            "Back-End" => array(
                "PHP" => "31233",
                "C#" => "23000",
                "NodeJS" => "23000",
                "Java" => "23000",
            ),
            "FGH" => array(
                "PHP" => "31233",
                "C#" => "23000",
                "NodeJS" => "23000",
                "Java" => "23000",
            )
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
        <?php 
            // foreach($Teach as $key => $value){
            //     echo '-'.$key."<br>";
            //     foreach($value as $k1 => $v1){
            //         echo "&emsp;+$k1----$v1<br>";
            //     }
            // }
        ?>
        <table>
        <thead>
            
            <tr>
                <th>STT</th>
                <th>Ho ten</th>
                <th>Lop</th>
                
            </tr>
        </thead>
        <?php 
            
            foreach($Teach as $key => $value){
                echo '-'.$key."<br>";
                
               
        ?>
        <tbody>
        <!-- <caption><?php echo $key; ?></caption> -->
            <tr>
                <?php
                $count = 0;
                 foreach($value as $k1 => $v1){
                    $count++;
                    echo "&emsp;+$k1----$v1<br>"; 
                
                ?>
                <td><?php echo $count; ?></td>
                <td><?php echo $k1; ?></td>
                <td><?php echo $v1; ?></td>
                
            </tr>
        </tbody>
        <?php } } ?>
    </table>
    
</body>
</html>