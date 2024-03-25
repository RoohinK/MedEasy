<?php

include('config.php');
if(!empty($_SESSION["id"]))
{
    $id=$_SESSION["id"];
    $result=mysqli_query($con, "SELECT * FROM user WHERE id=$id");
    $row=mysqli_fetch_assoc($result);

    $q="create database ";

}
else{
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <H1 style="margin-left:30%;">HEY, <?php echo $row["name"];?></H1>
    <H2 style="margin-left:30%;">ACCESS GRANTED</H2>
    

    <div class="sidebar">
    <a href="dashboard.php">Inventory</a>
    <a href="addmedicine.php">Add Medicine</a>
    <a href="trackmedicine.php">Track Medicine</a>

    <a href="logout.php">logout</a>
</div>
</body>
</html>