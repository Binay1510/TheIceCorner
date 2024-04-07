<?php
session_start();
    //submit to DB
    $servername="localhost";
    $username ="root";
    $password= "";
    $databse="theicecorner";
    
    //conn obj
    $conn = mysqli_connect($servername, $username, $password,$databse);
    
    //die if not success connection
    if (!$conn){
        die("connection failed".mysqli_connect_error()); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

<div class="container">

    <div class="login-container">
        <h3>Please login before accessing Menu!</h3>
        <h2>Login</h2>
        <form class="login-form" action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"  required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit"  name="submit">Login</button>
            </div>
        </form>
    </div>
    
    <?php


if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * from signup WHERE email='$email' And password='$password'";
    $data=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($data);
    
    if($total==1){  //if user already exist
        
        
        header("location:customer.php?email=$email"); 
    }
    else{
        echo "  Invalid ! you are not registerd ";
    }
}
?>
</div>
</body>
</html>