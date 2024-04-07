<?php
session_start();
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
.container {
    align-items: center;
    margin:41px 442px; 
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
    .container-fluid{
      margin:40px;
    }
  </style>
</head>
<body>
<div class="navbar">
  <img src="images/logo.png" alt="Logo" height="170">
  <div>
    <a href="admin.php">Back</a>
    
  </div>
</div>

<div class="container-fluid">
	<div class="col-lg-10 col-lg-offset-1">
    	<div class="text_01">
		<h2 >Users:</h2>
		
        </div>
		<div class="table-responsive">
			<table width="60%"  class="table table-bordered">
            
			<tr class="table_heading"><th width="7%">First Name</th><th width="7%">Last Name</th><th width="10%">Email</th>
			<th width="7%">gender</th><th width="7%">Delete</th></tr>
			<tr>
            <?php

				$str=mysqli_query($conn,"select * from signup order by id desc");
				while($val=mysqli_fetch_array($str))
			{ ?>
            
            <td class="table_data"><?php echo $val["name"];?></td>
			<td class="table_data"><?php echo $val["lname"];?></td>
			<td class="table_data"><?php echo $val["email"];?></td>
			<td class="table_data"><?php echo $val["gender"];?></td>
            <td><a href="deleteusers.php?id=<?php echo $val['id'];?>"><span class="fa fa-trash s"></span></a><br /><br />
        </tr>
            <?php 

			} ?>
			</table>

		</div>
	</div>
</div> 

</body>
</html>