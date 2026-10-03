<?php
session_start();
if($_SESSION['email']!= true){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome </h1> <br>
    <a href="logout.php">logout</a> <br>
    <?php 
    //session_start();
    print_r($_SESSION);
    
    ?>
</body>
</html>