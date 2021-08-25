<?php 
  // $aray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  // // $txt = null;
  
  // for($i = 1; $i <= 9; $i++){
  //   echo "<table>";
  //   for($j = 1; $j <=10; $j++){
  //     // echo $i * $j;
  //     echo "<tr>
  //             <th>".$i."</th>
  //             <th>"."*"."</th>
  //             <th>".$j."</th>
  //             <th></th>
  //           </tr><br>";
  //   }
  //   echo "</table>";
  // }

  // $aray = [
  //   [1 => 2, 1=>3, 1=>4, 1=>5, 1=>6, 1=>7, 1=>8, 1=>9, 1=>10],
  //   ['thay'=> 1]
  // ];
  // foreach($array as $value) {
  //   print_r($value);
  // }

  // Khai báo một mảng 10 phần tử
// - Viết hàm sắp xếp để in ra các phần tử đó từ lớn đến bé
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
rsort($a);
function sortArray($arr){
  for($i = 0; $i < count($arr); $i++){
    echo '-'.$arr[$i];
  }
}
sortArray($a);
?>