<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
    /* body {
    background-image: url('Images/fudge.jpg');
    background-size: cover;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
*/
.body{
    background-image: url('Images/fudge.jpg');
}
.container {
    align-items: center;
    margin:91px 442px; 
    background-color:white;
  opacity:0.7;
    padding: 67px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}

.form-group {
    margin-bottom: 20px;
}

.login-form input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.login-form button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
} 
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      margin : -8px;
    }

    /* Style the image */
    .navbar img {
      max-width: 100px;
      height: auto;
    }

    /* Style the links */
    .navbar a {
        
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
  
  </style>
</head>
<body>
    <!-- navbar -->
    
   <?php 
   include('header.php');
   ?>

<!-- form -->
<div class=container>
<div class="login-container">
        <h2>Contact Us</h2>
        <form class="login-form" action="contactus.php" method="post" >
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name"  required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="msg">Enter Message</label>
                <input type="text" id="msg" name="msg" required>
            </div>
            <div class="form-group">
            <button type="submit"  name="submit">Submit</button>
            
        </div> 
      
           <!-- name	email	id	msg -->
        </form>
    </div>
    </div>

    <?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    
    $query=mysqli_query($conn,"insert into `contact`(name,email,msg) values ('$name','$email','$msg')");
    }
    											
   // header('location:contactus.php');
    ?>

</body>
</html>