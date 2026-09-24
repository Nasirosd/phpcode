<?php

$citys =["dhaka", "ronpur", "sirajgon", "bogura"," rajshahi"];
echo"<pre>";

print_r($citys);
//$citys =["dhaka", "ronpur", "sirajgon", "bogura"," rajshahi"];
//array_shift($citys, " mirpur" );
//print_r($citys);
$citys =["dhaka", "ronpur", "sirajgon", "bogura"," rajshahi"];
array_pop($citys);
 print_r($citys);
$citys =["dhaka", "ronpur", "sirajgon", "bogura"," rajshahi"];
array_push($citys , "a","b");
print_r($citys);

?>