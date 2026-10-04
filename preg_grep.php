<?php
$foods = array("pasta", "steak", "fih", "potatoes");
$food = preg_grep("/s/", $foods);
print_r($food);
?>