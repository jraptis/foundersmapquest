<?php


function test($key,$id) {

$tmp= "http://api.steampowered.com/IPlayerService/GetBadges/v1/?";
$tmp .= $key;
$tmp .= "&";
$tmp .= $id;


$string = file_get_contents($tmp);

$string2 = substr($string, 15);

$string3 = str_replace("badges","data",$string2);

echo strtok($string3, ']').'] }';



}

$i=0;
$k='';
$si='';
do {    
$k .=  $_SERVER["QUERY_STRING"][$i];
$i++;
}while ($_SERVER["QUERY_STRING"][$i]!='&');

$i++;
do {    
$si .=  $_SERVER["QUERY_STRING"][$i];
$i++;
}while ($_SERVER["QUERY_STRING"][$i]!=false || $_SERVER["QUERY_STRING"][$i]=='0');


test($k,$si);



?>