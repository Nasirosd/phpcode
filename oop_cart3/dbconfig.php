<?php
// connection  whih my Sql
$host = "localhost";
$user ="root";
$passw ="";
$db ="pwad731";

$conn =mysqli_connect($host, $user, $passw, $db);
 if (!$conn){
    die("Database  conn  failed :" . mysqli_connect_error() );
 }
?>