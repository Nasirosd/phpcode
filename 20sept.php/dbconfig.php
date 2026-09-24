<?php
// connection  whih my Sql
$host = "localhost";
$user ="root";
$passw ="";
$db ="pwad73";

$conn =mysqli_connect($host, $user, $passw, $db);
 if (!$conn){
    die("Database  conn  failed :" . mysqli_connect-err0r() );
 } else{
    echo"ok";
 }
?>