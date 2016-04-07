<?php

    $s= '"datatables/examples/api/datatables.html"';   
   
    echo '                                             <div class="sixteen columns"> ';

    echo '                                             <h2 class="white">Entries</h2>';
   
							                                                         
    echo '        				      <p class="white center">Search your local area. Download file: <a href="data/sample.csv"> csv </a> | <a href="data/list.json" target="_blank"> json </a></p>                                                         
                                                      <hr class="white">';
                                                      
    echo '<iframe src=' . $s . ' width = 100%  height = 710px id="stats" style="overflow:visible;"></iframe> ';
    
?>  