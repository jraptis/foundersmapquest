<?php

$csv = file_get_contents('data/sample.csv');

$csv2 = explode("\n",$csv);


for($i=count($csv2)-4;$i<count($csv2);$i++) {

   $tmp= explode(',',$csv2[$i]);
   
       
    echo '<div class="four columns alpha member"><a href="javascript:frecentmap(' . $tmp[9] . ',' . $tmp[10] . ',\'' . $tmp[1] . '\')">
         <img id="zoom" class="center scale-with-grid" src="' . $tmp[7] . '">
         <h4 class="white center">' . $tmp[1] . '</h4>
         <h6 class="white center">' . $tmp[2] . '</h6>
         <p class="white center">' . $tmp[3] . ', ' . $tmp[4] . '</p>         
         </a></div>   ';   
       
   }
   
?>