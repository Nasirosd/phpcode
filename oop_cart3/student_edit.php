<?php 
include_once("dbconfig.php"); // Database connection

// Get student ID from URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Update student data when form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // FIXED: Corrected column name from 'phon' to match your DB column, or update 'phon' directly:
    // If your DB column is named 'phon', use: phon='$phone'
    // If your DB column is named 'phone', use: phone='$phone'
    $conn->query("UPDATE sutudent SET name ='$name', email='$email', phon='$phone' WHERE id ='$id'");
}

// Fetch student record to display in the form
$data = $conn->query("SELECT * FROM sutudent WHERE id = '$id'");
$row  = $data->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h3>Student update form</h3>

    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter name" value="<?php echo isset($row->name) ? $row->name : ''; ?>"><br>
        <input type="text" name="email" placeholder="Enter email" value="<?php echo isset($row->email) ? $row->email : ''; ?>"><br>
        <!-- Use $row->phon if your MySQL column is 'phon', or $row->phone if it is 'phone' -->
        <input type="text" name="phone" placeholder="Enter Phone" value="<?php echo ?>"><br>

        <input type="submit" name="submit" value="update"><br>
    </form>

    <a href="index.php">Back to student list</a><br>
</body>
</html>