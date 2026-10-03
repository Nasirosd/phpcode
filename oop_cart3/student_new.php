<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Entry form</h3>

    <?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){
$name =$_POST['name'];
$email =$_POST['email'];
$phone = $_POST['phone'];


include_once("dbconfig.php"); //database connaton
$conn->query ("INSERT INTO sutudent
 (Id, name, email,phon) VALUES (NULL,'$name', '$email', '$phone')");

    }
    
    
    
    ?>
    <form action="" method= "POST">
<input type="text" name="name" placeholder="Enter  name"><br>
<input type="text" name="email" placeholder="Enter email"><br>
<input type="text" name="phone" placeholder="Enter Phone"><br>


<input type="submit" name="submit" value ="SAVE"> <br>


    </form>
    <a href="index.php"> bake to studen  list</a> <br>
    
</body>
</html>