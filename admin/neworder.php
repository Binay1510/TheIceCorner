<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
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
    <a href="index.php">Logout</a>
    <a href="admin.php">Back</a>
    
  </div>
</div>



<div class="container-fluid">
	<div class="col-lg-10 col-lg-offset-1">
    	<div class="text_01">
		<h2 >new orders :</h2>
		
        </div>
		<div class="table-responsive">
			<table width="60%"  class="table table-bordered">
            
			<tr class="table_heading"><th width="7%"> Name</th><th width="7%">Address</th><th width="10%">city</th>
			<th width="7%">state</th><th width="7%">zip</th><th width="7%">country</th><th width="7%">id</th></tr>
			<tr>
            <?php

				$str=mysqli_query($conn,"select * from customercart ");
				while($val=mysqli_fetch_array($str))
			{ ?>
            
            <td class="table_data"><?php echo $val["name"];?></td>
			<td class="table_data"><?php echo $val["address"];?></td>
			<td class="table_data"><?php echo $val["city"];?></td>
			<td class="table_data"><?php echo $val["state"];?></td>
			<td class="table_data"><?php echo $val["zip"];?></td>
			<td class="table_data"><?php echo $val["country"];?></td>
			<td class="table_data"><?php echo $val["id"];?></td>
            
        </tr>
            <?php 

			} ?>
			</table>

		</div>
	</div>
</div> 
</body>
</html>