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
    // else echo "success";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login index</title>
    <link rel="stylesheet" href="adminindex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">

<div class="login-container">
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
    $sql="SELECT * from admin  WHERE email='$email' And password='$password'";
    $data=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($data);
    
    if($total==1){  //if user already exist
        
        
        header("location:admin.php?email=$email"); 
    }
    else{
        echo "  Invalid ! you are not registerd ";
    }
}
?>
</body>
</html>