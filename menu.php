<?php
//  session_start();
include('db.php');

  if(isset($_POST['addtocart'])){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $image=$_POST['image'];
  $quantity=1;

  //select cart on conditin i.e no to same dish are inserted sepratley
  $select_cart=mysqli_query($conn, "select * from `cart` where name='$name'");
  if(mysqli_num_rows($select_cart)>0){
     $display_message="product already added to cart";
  }
  else{
    //insert to cart 
    $sql= mysqli_query($conn,"insert into `cart`(name,price,image,quantity) values('$name','$price','$image','$quantity')");
	  $display_message="product  added to cart";
  }

 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Menu</title>
    <style>
      
 .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: #fff;
    padding: 8px 20px;
    margin : -8px;
    background-color: #DCF2F1;
  } 
.container-menu{
  width: 1192px;
   height:auto;
   margin:93px 226px;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;

}
.container-menu img:hover{
	opacity:0.5;
}
.card {
  height:300px;
  display:flex;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 21px;
  margin: 60px;
  text-align: center;
            
   }
  .product-image {
     max-width: 100%;
     max-height: 150px;
     margin-bottom: 10px;
     }
    
  .add{
     width:100px;
     margin-top:18px;
     margin-right:10px;
     margin-left:-1px;
     border-radius:14px;
     }
     .hiemail{
      color:black;
    position: absolute;
    top: 60px;
    right: 56px;
    font-size:20px;
}

  
    </style>
</head>
<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light  custom-navbar">
		
        <nav class="navbar navbar-light  custom-navbar ">
            <a class="navbar-brand" href="#">
              <img src="Images/Pink Green Vintage Retro Illustrative Simple Ice Cream Shop Logo.png" width="100" height="100" alt="logo">
            </a>
          </nav>
		  
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="customer.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
</li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>

              <?php 
                 
                 $select_pro=mysqli_query($conn,"select * from `cart` ") or die('failed');
                 $row_count=mysqli_num_rows($select_pro);
                 

              ?>
			 <a href="cart.php"> <li class="nav-item"><img src="images/add-to-cart.png" alt="" height="25"><sub class="subb" ><?php echo $row_count; ?></sub></li></a>
			  
          </ul>

          
        </div>
        <div class="hiemail">
      <?php
 
            if(isset($_GET['email'])){
                $_SESSION['email'] = $_GET['email']; // Store the email in a session variable
                echo " Hi ".$_SESSION['email'];
            } 
            elseif(isset($_SESSION['email'])) {
                echo " Hi ".$_SESSION['email']; // Display the stored email from the session
            }
  ?>
            </div>
      </nav>

      <!-- display add to cart msg -->
      <?php
      if(isset($display_message)){
        echo " <div class='display-message'>
        <span>$display_message</span>
        <i class='fas fa-times' onclick='this.parentElement.style.display=`none`'></i>
       </div>";
      }
         ?>
  
  <div class="container-menu">
<?php
        $sql = "SELECT * FROM addproduct";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {    ?>
      <form method="post" action="">
            <div class="card">
            
                <img src="<?php echo $row["image"];?>" class="product-image" height="200" width="190">
           
                 <div ><?php echo $row["name"]; ?></div>
            
                  <div class="product-price float-left"><?php echo "₹".$row["price"]; ?></div>
                  <div><input type="submit" name="addtocart" value="Add to cart" name="addtocart" class="add"> </div>

            </div>
            
                  <input type="hidden" name="name" value=" <?php echo $row['name'] ?> ">
                  <input type="hidden" name="price" value=" <?php echo $row['price'] ?> ">
                  <input type="hidden" name="image" value=" <?php echo $row['image'] ?> ">
        </form>
           
           <?php
              }
        } 
        
        else {
            echo "0 results";
        }

        ?>
       
      </div>
</body>
</html>