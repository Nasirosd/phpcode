<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef4ff, #f8fbff);
            color: #1f2937;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
            padding: 30px;
        }

        h3 {
            margin: 0 0 20px;
            font-size: 32px;
            color: #1d4ed8;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #dbeafe;
            padding: 14px 12px;
            text-align: left;
        }

        th {
            background: #eff6ff;
            color: #1e3a8a;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        .action {
            white-space: nowrap;
        }

        .action a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            color: #2563eb;
            border-radius: 6px;
            text-decoration: none;
        }

        .action a:hover {
            background: #eff6ff;
        }

        .danger {
            color: #dc2626 !important;
        }

        .action .danger:hover {
            background: #fef2f2;
        }

        .action svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: currentColor;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 2;
        }
    </style>
</head>
<body>
    
<h2> studet list</h2>
<a href="student_new.php"> studet entry from</a>
<?php
$rowData = $conn->query("SELECT * FROM sutudent");?>
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>id </th>
        <th>name</th>
        <th>email</th>
    
        <th>phone</th>
         <th>Action</th>
    </tr>

 <?php
   while ($row =$rowData->fetch_assoc()){
    //echo $row['name'] . "<br>";
?>

<tr>

<td><?php echo $row['Id'] ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['phon'] ?></td>

<td class="action">
    
    <a href="studentEdit.php?id=<?php echo $row['Id']; ?>" aria-label="Edit student" title="Edit student">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z"/></svg>
    </a>
    <a onclick="return confirm('Are you sure you want to delete this student?');"
       class="danger" href="student_delete.php?id=<?php echo $row['Id']; ?>" aria-label="Delete student" title="Delete student">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 6h18"/><path d="M8 6V4h8v2"/><path d="m19 6-1 14H6L5 6"/><path d="M10 11v5M14 11v5"/></svg>
    </a>
</td>


</tr>
<?php 

   }
?>
</table>
</body>
</html>