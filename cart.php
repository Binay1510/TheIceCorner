<?php
// session_start();
include('db.php');


//update qry
if(isset($_POST['update_prod_qty'])){
    $update_val=$_POST['update_qty'];
    // echo $update_val;
    $update_id=$_POST['update_qty_id'];
    // echo $update_id;
    $update_quantity_qry=mysqli_query($conn,"update `cart` set quantity=$update_val where id=$update_id");
    if($update_quantity_qry){
        header('location:cart.php');
    }
}
if(isset($_GET['remove'])){
    $remove_id=$_GET['remove'];
    mysqli_query($conn,"delete from `cart` where id=$remove_id");
    header('location:cart.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
 .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: #fff;
    padding: 11px 20px;
    margin : -8px;
    background-color: #DCF2F1;
    font-size:22px;
  } 
  .heading{
    margin:120px;
  }
  .container{
    /* background-color:blue; */
    margin-top:150px;
  }
  table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #176B87;
        color: white;
    }

    .quantity-box {
        display: flex;
        align-items: center;
    }

    .updateqty {
        margin-left: 5px;
    }

    .bottom_btn {
        display: block;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #176B87;
        color: white;
        text-align: center;
        text-decoration: none;
    }

    .bottom_btn:hover {
        background-color: #86B6F6; 
        color: white; 
    }
 h3
 {
    text-align: center;
 }
 .hiemail{
    color:black;
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
			 <a href="cart.php"> <li class="nav-item"><img src="images/add-to-cart.png" alt="" height="25" width="25"><sub class="subb" ><?php echo $row_count; ?></sub>
				</a>
                
              </li>
			  
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


      <!-- cart table -->
      <div class="container">
        <section class="products">
            <h3>My Cart</h3>
            <div class="product-container">
            <div class="edit-form">
			<table width="60%"  class="table table-bordered">
            
            <?php
                $select_cart_prod=mysqli_query($conn, "select * from `cart` ");
                $num=1;
                $grand_total=0;
                if(mysqli_num_rows($select_cart_prod)>0){
                    echo"
                    
                <tr class='table_heading'>
                    <th width='7%'>Id</th>
                    <th width='20%'>Name</th>
                    <th width='10%'>Price</th>
                    <th width='30%'>Image</th>
                    <th width='7%'>Quantity</th>
                    <th width='7%'>Total Price</th>
                    <th width='7%'>Delete</th>
                </tr>";
                while($fetch_cart_pro=mysqli_fetch_assoc($select_cart_prod)){
                    ?>
<tr>
                <td width="7%"><?php echo $num?></th>
                <td width="20%"> <?php echo $fetch_cart_pro['name'] ?> </td>
                <td width="10%"> <?php echo $fetch_cart_pro['price'] ?></td>
			    <td width="30%"><img src="<?php echo $fetch_cart_pro['image']?>"height="80"></td>
            
                <td>
                    <form action="" method="POST">
                        <input type="hidden" value="<?php echo $fetch_cart_pro['id'] ?>" name="update_qty_id">
                    <div class="quantity-box">
                        <input type="number" min="1" value="<?php echo $fetch_cart_pro['quantity'] ?>" name="update_qty">
                        <input type="submit" class="updateqty" value="Update" name="update_prod_qty">
                    </div>
                    </form>
                </td>
                <!-- total price -->
                <td width="10%"> <?php echo $subtaotal=(  $fetch_cart_pro['price']*$fetch_cart_pro['quantity']) ?></td>    
                <td width="7%"><a href="cart.php?remove=<?php echo $fetch_cart_pro['id'] ?>"><i class="fa fa-trash s"></i>Remove</a></td>
            </tr>
                    <?php
                    $grand_total=$grand_total+(  $fetch_cart_pro['price']*$fetch_cart_pro['quantity']);
                    $num++;
                }
                }
                else{
                    echo " <div class='empty_text'>Cart is Empty </div> ";
                }
            ?>

			</table>

		</div>

        <div class="table_bottom">
            <a href="menu.php" class="bottom_btn">Continue Shopping</a>
            <h6 class="bottom_btn">Grand Total :₹ <span><?php echo $grand_total ?></span></h6>
            
            <a href="checkout.php" class="bottom_btn">Proceed to checkout</a>
        </div>
        </div>
        </section>
      </div>
</body>
</html>