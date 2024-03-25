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
    <title>MedEasy Dashboard</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="sidebar">
    <a href="./dashboard.html">Inventory</a>
    <a href="./addmedicine.html">Add Medicine</a>
    <a href="./trackmedicine.html">Track Medicine</a>
</div>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    
    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }
    
    input, select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    
    button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="addmedicine.php" method="post" autocomplete="off">
    <label for="medicine_name">Medicine Name</label>
    <input type="text" id="medicine_name" name="medicine_name" required>
    
    <label for="medicine_type">Medicine Type</label>
    <select id="medicine_type" name="medicine_type">
        <option value="pill">Pill</option>
        <option value="syrup">Syrup</option>
        <option value="ointment">Ointment</option>
    </select>
    
    <label for="expiry_date">Expiry Date</label>
    <input type="date" id="expiry_date" name="expiry_date" required>
    
    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" required>
    
    <label for="weekly_frequency">Weekly Frequency</label>
    <input type="number" id="weekly_frequency" name="weekly_frequency" required>
    
    <button type="submit">Submit</button>

    <a href="logout.php">logout</a>
</form>
</body>
</html>

