<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ADMIN(edit Product)</title>
<!-- <link rel="stylesheet" href="edit.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
/* .input2{ 
  height:55px;margin-top:29px;background-color: black ;color: white;;

}body{
	
    background:url('images/coness.jpg');
    background-size:cover;
}
.container {
    align-items: center;
    margin:41px 442px; 
    background-color:white;
  opacity:0.7;
    padding: 67px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.form-group {
    margin-bottom: 20px;
}.form-group-save{
  margin-top: 5px;
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

.input1
{ 
height:60px;
width:200px;

border-bottom:1px solid #ddd;
font-weight:bold;
font-size:16px;

}



form{
  margin-top:60px;
  
}
label{
font-size:16px;	
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
  
}
.form-group {
  border: 1px solid #000;
  padding: 10px;
  display: inline-block;
} */
body{
	
    background:url('images/coness.jpg');
    background-size:cover;
}
.container {
  max-width: 400px;
  margin-top:140px;
  
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f4f4f4;
}

/* Style for the form elements */
.form-group {
  margin-bottom: 20px;
}

.input1, .input2 {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.input2 {
  background-color: #007bff; /* Blue background color */
  color: #fff; /* White text color */
  font-weight: bold; /* Bold text */
}
</style>
  
</head>

<body>
<?php 
$conn=mysqli_connect("localhost","root","","theicecorner");

$id =$_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM addproduct WHERE id  = '$id'");

$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
			$name=$test['name'] ;
			$price=$test['price'];
			// $image=$test['image'];
	
if(isset($_POST['SAVE']))
{	
	$name_save = $_POST['name'];
	$price_save = $_POST['price'];
	// $image_save = $_POST['image'];
    // image = '$image_save'
	$res=mysqli_query($conn,"UPDATE addproduct SET name = '$name_save' , price = '$price_save'  WHERE id ='$id';");			
	header('Location:../addproduct.php');			
}
?>
<div class=container>
<div class="login-container">
        <h2>Edit Product</h2>
        <form class="login-form" action="" method="POST" >
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="input1" value="<?php echo $name ?>"/>
            </div>
            
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="input1" value="<?php echo $price ?>"/>
            </div>
            <!-- <div class="form-group">
              <label for="image">Attach Image</label>
              <input type="file" name="image" class="input1" value="<?php echo $image ?>"/>
</div> -->
          <div class="form-group">
          <input style="margin-bottom:12px;" class="input2" type="submit" value="SAVE" name="SAVE"/>
            
        </div> 
           
        </form>
        </div>
        </div>

        
</body>
</html>
