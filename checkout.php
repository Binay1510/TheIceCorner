<?php
include('db.php');


if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $country=$_POST["country"];

    $sql="INSERT INTO customercart (name,address,city,state,zip,country) VALUES('$name','$address','$city','$state','$zip','$country')"or die(mysqli_error($conn));
    // $result =mysqli_query($conn,$sql); 

    if ($conn->query($sql) === TRUE) {
        // Redirect to the payment page after successful submission
        header("Location: payment.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <style>
.containerr {
    align-items: center;
    margin:164px 442px; 
    background-color:white;
    opacity:0.7;
    padding: 50px;
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
    </style>
</head>
<body>
    <?php include('header.php');
    ?>

<div class=containerr>
<div class="login-container">
        <h2>Enter Customer Details</h2>
        <form class="login-form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Customer Name</label>
                <input type="text" id="name" name="name"  required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
              <label for="state">State</label>
              <input type="text" id="state" name="state" required>
          </div>
          <div class="form-group">
              <label for="zip">Zip </label>
              <input type="text" id="zip" name="zip" required>
          </div>
          <div class="form-group">
              <label for="country">Country </label>
              <input type="text" id="country" name="country" required>
          </div>
          <div class="form-group">
            <button type="submit"  name="submit">Submit</button>
            
        </div> 

        </form>
        
    </div>
    </div>
</body>
</html>