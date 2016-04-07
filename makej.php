<?php

$csv = file_get_contents('data/sample.csv');

$csv2 = explode("\n",$csv);

$jsn = '{"data":[';

for($i=0;$i<count($csv2);$i++) {

   $tmp= explode(',',$csv2[$i]);
   if($i>1) {
       $jsn = $jsn . ',';
       }
       
    if($i>0) {
    $jsn = $jsn . '{"id":' . $tmp[0] . ',"companyname":"' . $tmp[1] . '","founder":"' . $tmp[2] . '","city":"' . $tmp[3] . '","country":"' . $tmp[4] . '","postal":"' . $tmp[5] . '","street":"' . $tmp[6] . '","photo":"' . $tmp[7] . '","page":"' . $tmp[8] .'","lat":"' . $tmp[9] . '","long":"' . $tmp[10] . '"}'; 
       } 
       
   }
   
   $jsn = $jsn . ']}';
   
   file_put_contents('data/list.json', $jsn);
   echo $jsn;
?>