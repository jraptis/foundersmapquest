<?php 

if($_POST["lat"]>=-180 && $_POST["lat"]<=180 && $_POST["long"]>=-180 && $_POST["long"]<=180) {
$csv = file_get_contents('data/sample.csv');

$csv2 = explode("\n",$csv);

$csvnew = $csv . "\n" . count($csv2) . ',' . $_POST["companyname"] . ',' . $_POST["founder"] . ',' . $_POST["city"] . ',' . $_POST["country"] . ',' .  $_POST["postal"] . ',' . $_POST["street"] . ',' .  $_POST["photo"] . ',' .  $_POST["page"] . ',' .  $_POST["lat"] . ',' . $_POST["long"];

file_put_contents('data/sample.csv',$csvnew);
echo 'ok';
} else echo 'Longitude and Latitude must be numbers between -180 and 180 '. $_POST["lat"]. ';;;' . $_POST["long"];
?>