<?php 

include_once("dbconfig.php");
$id= $_GET['id'];
 $conn->query("DELETE FROM  sutudent WHERE  id = '$id'");
 if($conn->affected_rows){
    header("Locaton: index.php");
 }
?>