
<?php 
include_once("dbconfig.php"); //database connaton
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class=" ">Student update form</h3>

    <?php
//desply stidet recod
     $id =$_GET['id'];
     //$data = $conn->query("SELECT * FROM  sutudent WHERE id ='$id' ");
     //$row = $data->fetch_object();


   //  update studet data
    if($_SERVER['REQUEST_METHOD'] =='POST'){
$name =$_POST['name'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$conn->query("UPDATE sutudent SET name ='$name', email='$email', phon='$phone'
 WHERE id ='$id' ");

//include_once("dbconfig.php"); //database connaton
$conn->query("UPDATE sutudent
 SET name='$name', email='$email', phon='$phone' WHERE id='$id'");


    }
    
     $data = $conn->query("SELECT * FROM  sutudent WHERE id ='$id' ");
     $row = $data->fetch_object();
    
    ?>


    <form action="" method= "POST">
<input type="text" name="name" placeholder="Enter  name" value="<?php echo $row->name;?>"><br>
<input type="text" name="email" placeholder="Enter email" value="<?php echo $row->email;?>"><br>
<input type="text" name="phone" placeholder="Enter Phone" value="<?php echo $row->phon;?>"><br>


<input type="submit" name="submit" value ="update"> <br>


    </form>
    <a href="index.php"> bake to studen  list</a> <br>
    
</body>
</html>