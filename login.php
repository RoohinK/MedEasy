<?php
include('config.php');
if(isset($_POST["submit"]))
{
    $usernamemail=$_POST["usernameemail"];
    $password=$_POST["password"];
    $result=mysqli_query($con, "SELECT * FROM user WHERE username='$usernamemail' OR email='$usernamemail'");
    $row1=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0) 
    {
        if($password==$row1["password"])
        {
           $_SESSION["login"]=true;
           $_SESSION["id"]=$row1["id"];
           header("Location: index.php");

           
        }
        else
        {
            "<script>alert('incorrect password'); </script>";
        }
    }
}
    else
    {
        "<script>alert('user not registered'); </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <title>LOGIN</title>

</head>
<body>

<img src="med2.png" alt="" style="width:5%; margin-left:48%;">
<center>
<div id="edit1">
<p class="sign">Sign in to MedEasy</p>
</div>
</center>
<center>
<div id="edit2">
<form id="logincard" action="login.php" method="post" autocomplete="off">            
        <div class="textfield">
            <label for="usernameemail">Username/Email</label>
            <input type="text" name="usernameemail">
        </div>

        <div class="textfield">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div> 

        <div class="textfield">  
            <button type="submit" class="btn btn-success" name="submit">Sign in</button>
        </div>
    
</form>    

<div class="card2">
    <p>New to MedEasy? <a href="registration.php">Create an account</a></p>
</div>

<div class="footer">
    <p> <a href="satyam.php">Home</a>
        <a href="satyam.php#about2">About Us</a>
        <a href="satyam.php#contacts2">Contact Us</a>
    </p>
</div>

</div>
</body>
</html>