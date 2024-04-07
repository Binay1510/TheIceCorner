<?php
// session_start();
include('db.php');

if(isset($_POST['submit'])){
  $code=$_POST["code"];
	$name=$_POST["name"];
	$price=$_POST["price"]; 
   // Move the uploaded file to the specified location
   $file=$_FILES["image"]["name"];
	 $image='uploads/'.$file;
   move_uploaded_file($_FILES["image"]["tmp_name"],$image);
	 mysqli_query($conn,"insert into addProduct(code,name,price,image) values('$code','$name','$price','$image')");
	//  header('location:addProduct.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
    
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
    .navbar img {
      max-width: 100px;
      height: auto;
    }
    .navbar a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
  </style>
</head>
<body>
    <!-- navbar -->
    
    <div class="navbar">
  <img src="images/Pink Green Vintage Retro Illustrative Simple Ice Cream Shop Logo.png" alt="Logo" height="170">
  <div>
    <a href="admin/index.php">Logout</a>
    <a href="admin/admin.php">Back</a>
    
  </div>
</div>

<!-- form -->
<div class=container>
<div class="login-container">
        <h2>Add Product</h2>
        <form class="login-form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name"  required>
            </div>
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" id="code" name="code" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" required>
            </div>
            <div class="form-group">
              <label for="image">Attach Image</label>
              <input type="file" id="image" name="image" required>
          </div>
          <div class="form-group">
            <button type="submit"  name="submit">Submit</button>
            
        </div> 
           
        </form>
    </div>
    </div>
     <div class="container-fluid">
	<div class="col-lg-10 col-lg-offset-1">
    	<div class="text_01">
		<h2 >Products</h2>
		
        </div>
		<div class="table-responsive">
			<table width="60%"  class="table table-bordered">
            
			<tr class="table_heading"><th width="7%">Id</th><th width="20%">Name</th><th width="10%">Price</th>
			<th width="10%">Image</th><th width="7%">Delete/Edit</th></tr>
			<tr>
            <?php

				$str=mysqli_query($conn,"select * from addProduct order by id desc");
				while($val=mysqli_fetch_array($str))
			{ ?>
            
            <td class="table_id"><?php echo $val["code"];?></td>
			<td class="table_data"><?php echo $val["name"];?></td>
			<td class="table_data"><?php echo $val["price"];?></td>
			<td class="table_img"><img src="<?php echo $val["image"];?>" height="120px" width="130px" alt="image not found" /></td>
			<td><a href="admin/delete.php?id=<?php echo $val['id'];?>">Delete</a><br /><br />
			<a href="admin/edit.php?id=<?php echo $val['id'];?>">Edit</a></td>
			</tr>
            <?php 

			} ?>
			</table>

		</div>
	</div>
</div> 


</body>
</html>