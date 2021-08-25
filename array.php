<?php
$legalRule = [
   'BR' => ['AdrCorReg', 'EstrogenBalance'],
   'JP' => ['AdrCorReg', 'EstrogenBalance'],
   'AT' => ['EstrogenBalance'],
   'BE' => ['EstrogenBalance'],
   'BG' => ['EstrogenBalance'],
   'CY' => ['EstrogenBalance'],
   'SK' => ['EstrogenBalance'],
   'NO' => ['GALLB'],
   'TH' => ['GALLB', 'D3K2Reg'],
   'CA' => ['D3K2Reg'],
   'IE' => ['SleepAid90Reg']
];
// print_r($legalRule);
// foreach ($legalRule as $data) {
//    echo '<pre>';
//    $string = implode(',', $data);
//    print_r($data);
//    echo '<pre>';
//    // $array = explode($key, );
//    // $new_array = explode(' ', $key);
//    var_dump($string);
//    // if (in_array($string, $key))
//    //    echo 'ok';
// }
$shippingRule = [];
foreach ($legalRule as $key => $value) {
   foreach ($value as $data) {
      // for ($i = 0; $i < count($data); $i++) {
      //    if (in_array($data[$i], $legalRule)) {
      //       print_r($data);
      //    }
      // }
      // print_r($data);
      // print_r($key);
      // $a = explode(" ", $data);
      // $b = explode(" ", $key);
      // $new_array = array_merge($a, $b);
      // $end = array_merge($new_array, $shippingRule);
      // print_r($a);
      // print_r(array_merge($data, $key));
      // print_r('key: ' . $data . ',,value: ' . $key . '<br>');
      $shippingRule[$data] = $key;
      // print_r($shippingRule);

      // print_r($end);
      // foreach ($end as $value) {
      //    var_dump($value);
      //    $mang = explode(' ', $value);
      // }
      // print_r($key);
      // $key_key = $key;
      // echo ($key . '<br>');
      // if (in_array($key, $value)) {
      //    echo $key;
      // }
      // $shippingRule[$data] = $key;

      // echo '<pre>';
      // print_r($data);
      // echo '<pre>';
   }
   // $a = explode(' ', $key);

   // $aa = explode(' ', $key);
   // echo '<pre>';
   // print_r(explode(" ", $key));
   // echo ($data);
   // print_r($shippingRule);
   // $aaa = array_values($aa);
   // var_dump($aaa);
   // echo '</pre>';
}
echo '<pre>';
// print_r($key);
print_r($shippingRule);
echo '<pre>';
// $shippingRule = [
//    'AdrCorReg' => ['BR', 'JP'],
//    'EstrogenBalance' => ['BR', 'JP', 'AT', 'BE', 'BG', 'CY', 'SK'],
//    'GALLB' => ['NO', 'TH'],
//    'D3K2Reg' => ['TH', 'CA'],
//    'SleepAid90Reg' => ['IE'],
// ];
