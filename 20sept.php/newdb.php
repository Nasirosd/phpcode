<?php

$host ="localhost";
$user ="root";
$passw ="";
$db ="pwad73"

$conn = mysqli_connect($host, $user, $passw, $db);
 if (!$conn){
    die("Database  conn  failed :" . mysqli_connect_error() );
 } else{
 echo"ok";
 }

?>