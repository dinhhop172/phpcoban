<?php

$legalRule = [
   'BR' => ['AdrCorReg', 'EstrogenBalance'],
   'JP' => ['AdrCorReg', 'EstrogenBalance'],
   'AT' => ['EstrogenBalance'],
   'BE' =>  ['EstrogenBalance'],
   'BG' => ['EstrogenBalance'],
   'CY' => ['EstrogenBalance'],
   'SK' => ['EstrogenBalance'],
   'NO' => ['GALLB'],
   'TH' => ['GALLB', 'D3K2Reg'],
   'CA' => ['D3K2Reg'],
   'IE' => ['SleepAid90Reg']
];
$shippingRule = [];
foreach($legalRule as $key => $value) {
   foreach($value as $data){
      $shippingRule[$data][] = $key;
   }
}
echo '<pre>';
print_r( $shippingRule);
echo '</pre>';



// $shippingRule = [
//     'AdrCorReg' => ['BR', 'JP'],
//     'EstrogenBalance' => ['BR', 'JP', 'AT', 'BE', 'BG', 'CY', 'SK'],
//     'GALLB' => ['NO', 'TH'], 
//     'D3K2Reg' => ['TH', 'CA'], 
//     'SleepAid90Reg' => ['IE'], 
// ];