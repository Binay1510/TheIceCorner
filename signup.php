<?php
session_start();

// include("db.php");

$servername="localhost";
    $username ="root";
    $password= "";
    $databse="theicecorner";
    
    //conn obj
    $conn = mysqli_connect($servername, $username, $password,$databse);
    
    if (!$conn){
        die("connection failed".mysqli_connect_error()); 
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register</title>
    <link rel="stylesheet" href="signup.css">
    
</head>
<body>

<div class=container>
<div class="login-container">
        <h2>Register </h2>
        <form class="login-form" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"  required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" id="gender" name="gender" required>
            </div>
            <div class="form-group">
                <label for="birthday">birthday</label>
                <input type="text" id="birthday" name="birthday" required>
            </div>
            <div class="form-group">
                <a href="signin.php"><button type="submit"  name="submit">Register</button></a>
            </div>
         
        </form>
        <div class="form-group">
            <a href="index.php"><button  name="back">Back</button></a>   
            
            </div>
    </div>

    <?php
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
   
    $birthday=$_POST["birthday"];
    $gender=$_POST["gender"];
    $sql="SELECT * from signup WHERE email='$email' And password='$password'";
    $data=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($data);

    if($total==1){  //if user already exist
          echo "you are already registered";
  
          //header('location:signin.php'); 
      }
   else{
        $sql="INSERT INTO `signup` (name,lname,email,password,birthday,gender) VALUES('$name','$lname','$email','$password','$birthday','$gender')"or die(mysqli_error($conn));
        $result =mysqli_query($conn,$sql); 
        echo "<br> registerd successfully";
   }
  
}?>
    </div>

</body>
</html>