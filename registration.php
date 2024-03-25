<?php
include('config.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $q=mysqli_query($con, "SELECT * FROM user WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($q)>0) 
    {
        echo
        "<script>alert('USERNAME/PASSWORD HAS ALREADY BEEN TAKEN'); </script>";

    }
    else
    {
        if($password==$confirmpassword)
        {
            $q1="INSERT INTO user VALUES('', '$name', '$username', '$email', '$password')";
            mysqli_query($con,$q1);
            echo
            "<script>alert('REGISTRATION SUCCESSFUL'); </script>";

            $mail=new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth=true;
            $mail->Username='itsmerooh123@gmail.com';
            $mail->Password='muvcmqakqhdwjcwl';
            $mail->SMTPSecure='ssl';
            $mail->Port=465;
     
            $mail->setFrom('itsmemrooh123@gmail.com');
            $mail->addAddress($email);
            $mail->Subject='healthcare';
            $mail->Body='thank you for registering :)';

        if($mail->send()) {
        echo 'Email sent successfully';
        } else 
        {
        echo 'Error sending email: ' . $mail->ErrorInfo;

        }
        $sql_create_db = "CREATE DATABASE IF NOT EXISTS $username";
if ($con->query($sql_create_db) === TRUE) {
    // Select the newly created database
    $con->select_db($username);

    // Create a table to store user information
    
    $sql = "create table $password(id INT AUTO_INCREMENT,NAME VARCHAR(20) NOT NULL,  TYPE VARCHAR(20) NOT NULL, EXPIRY VARCHAR(30) NOT NULL,QTTY VARCHAR(100) NOT NULL,FREQUENCY VARCHAR(20) NOT NULL,primary key (id))";  
    if(mysqli_query($con, $sql)){  
    echo "Table $password created successfully";  
    }else{  
    echo "Could not create table: ". mysqli_error($con);  
    } ;
    } 
    else 
    {
    echo "Error creating database: " . $con->error;
}

// Close database connection
$con->close();
        }
        else
        {
            "<script>alert('PASSWORDS DONT MATCH'); </script>";
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>MedEasy login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/github.png" type="image/x-icon">
</head>
<body>
<main>
        <img src="med2.png" alt="" style="width:5%">
        <div id="edit2" style="margin-top:0%;">
        <p class="sign1">Register on MedEasy</p>
        </div>
        <form id="registercard" action="registration.php" method="post" autocomplete="off">            
                <div class="textfield">
                    <label for="email">Email Address</label>
                    <input type="text" name="email">
                </div>

                <div class="textfield">
                    <label for="name">Your Name</label>
                    <input type="text" name="name">
                </div> 

                <div class="textfield">
                    <label for="username">Username</label>  
                    <input type="text" name="username"> 
                </div>    

                <div class="textfield">
                    <label for="password">Password</label>     
                    <input type="password" name="password">       
                </div> 

                <div class="textfield">
                    <label for="confirmpassword">Confirm Password</label>
                         
                    <input type="password" name="confirmpassword">       
                </div> 
                <div class="textfield">  
                    <button type="submit" class="btn btn-success" name="submit">Register</button>
                </div>
            
</form>    
        
        <div class="card2">
            <p>Already a MedEasy User? <a href="/login.html">Login here.</a></p>
        </div>

        <div class="footer">
            <p> <a href="satyam.php">Home</a>
                <a href="satyam.php#about2">About Us</a>
                <a href="satyam.php#contacts2">Contact Us</a>
            </p>
        </div>
    </main>
    
</body>
</html>