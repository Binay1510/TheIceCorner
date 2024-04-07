<?php
include('db.php');
session_start();

// $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ice Corner</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style> 
.footer{
    background-color: white;
    justify-content: center;
	text-align:center;
	padding-top:40px;
    padding-left: 500px;
}
.contact-us-bottom {
    background-color: #f7f7f7;
    padding: 20px;
    text-align: center;
  }
  .contact-us-bottom h2 {
    margin-bottom: 10px;
    color: #ff6600;
  }
  .contact-us-bottom p {
    margin: 5px 0;
  }</style>
</head>
<body>
    <!-- Navbar -->
   
    <nav class="navbar fixed-top navbar-expand-lg navbar-light  custom-navbar">
		
        <nav class="navbar navbar-light  custom-navbar ">
            <a class="navbar-brand" href="#">
              <img src="Images/Pink Green Vintage Retro Illustrative Simple Ice Cream Shop Logo.png" width="130" height="130" alt="logo">
            </a>
          </nav>
		  
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="signin.php">Menu <span class="sr-only">(current)</span></a>
            </li>
            
			  <li class="nav-item">
                <a class="nav-link" href="signin.php">Login</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="signup.php">Register</a>
              </li>	
          </ul>
        </div>
      </nav>
<!-- Main pge -->
		<div class="slider">
        			<div class="slider_text">
    				<b>TASTE  YOUR  ICE  CREAM</b>
        			<hr width="400">
					<h1 ><b>ENJOY  YOUR  LIFE</b></h1>
            		</div>
</div>
                  <!-- More than 20,000 dishes to order! -->
<div class="ad">
	More than 100 flavours to order!
	<div class="ad2">
	Welcome to Biggest Network of Ice Cream Ordering & Delivery
	</div>
</div>


<div class="im4">
	<div class="row">
    	<div class="container">
    		<div class="centered">
              <div class="col-lg-3">
                <div class="square">
            		<img src="Images/mango-5549586_1280.jpg" class="img-responsive" height="200" width="240">
                <div class="sq_text">
                	Kulfi
                </div>
                <div class="sq_text2">
               		More than 50 kinds of Kulfi
                </div>
              </div>
        </div>
            
            <div class="col-lg-3">
            	<div class="square">
            	<img src="Images/ice-cream-4848501_1280.jpg" height="200" width="240">
                <div class="sq_text">
                	Flavours
                </div>
                <div class="sq_text2">
               		Choose your favourite Flavour
                </div>
                </div>
            </div>
            <div class="col-lg-3">
            	<div class="square">
            	<img src="Images/ice-cream-2202561_1280.jpg" class="animated zoomIn" height="200" width="240">
                <div class="sq_text">
                	Cookie Ice Cream
                </div>
                <div class="sq_text2">
               		From cookie to cream
                </div>
                </div>
            </div>
            <div class="col-lg-3">
            <div class="square">
            	<img src="Images/tiramisu-7978646_1280.jpg" height="200" width="240">
                <div class="sq_text">
                	Ice cream cakes
                </div>
                <div class="sq_text2">
               		Ice cream overload
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="text">
	and much more favourite ice creams...<button class="btn btn-group-lg"><a href="signin.php">More Flavours</a></button> 
</div>






<!-- whats popular -->
<div class="popular">
	What's popular
	<div class="ad2" style="text-transform:capitalize">
		Client's Most popular choice
	</div>
</div>
	
		<div class="im4">
			<div class="row">
            	<div class="container">
                	<div class="centered">
 		             <div class="col-lg-3">
 			               <div class="square">
			            		<img src="Images/cone.jpg" class="img-responsive" height="200" width="240">
  					             <div class="img_text">
    				            	Cones
               					 </div>
                				<div class="sq_text2">
               						with chocolate,mango and pista Flavours
                				</div>
              				</div>
            			</div>
                        <div class="col-lg-3">
 			               <div class="square">
			            		<img src="Images/fudge.jpg" class="img-responsive" height="200" width="240">
  					             <div class="img_text">
    				            	Ice Cream fudge 
               					 </div>
                				<div class="sq_text2">
               						Tasty Brownie fudges 
                				</div>
              				</div>
            			</div>
                        <div class="col-lg-3">
 			               <div class="square">
			            		<img src="Images/gourmet.jpg" class="img-responsive" height="200" width="240">
  					             <div class="img_text">
    				            	Gourmet 
               					 </div>
                				<div class="sq_text2">
               						Premium Frozen desserts
                				</div>
              				</div>
            			</div>
                        <div class="col-lg-3">
 			               <div class="square">
			            		<img src="Images/sizzler.jpg" class="img-responsive" height="200" width="240">
  					             <div class="img_text">
    				            	Sizzlers
               					 </div>
                				<div class="sq_text2">
                          Sizzling Brownie 
                				</div>
              				</div>
            			</div>
            			</div>
    			</div>
			</div>
		</div>




 
<!-- why people -->
<div class="row">
	<div class="container-why">
            <div class="popular">
    				Why people choose us
    		</div>
            <div class="why">
         		<div class="col-lg-4">
  		            <h3>1.Easy ordering by phone</h3>
                    <p>This allows you to order quickly and easily accessible at any time.</p>
		            <h3>2.Easy Online ordering</h3>
		            <p>Once logged in, you can easily navigate around the site to complete the order.</p>
		            <h3>3.Customer satisfaction</h3>
                    <p>We take responsibility that correct order is delivered to you.</p>
	            </div>
 	           <div class="col-lg-4">
 		           <img src="Images/sizzler.jpg" height="250" style="padding-top:30px;" alt="">
  	           </div>
  	           <div class="col-lg-4">
      		      <h3>4.User-friendly</h3>
            		<p>This allows you to order easily and quickly at any time.</p>
 			        <h3>5.positive feedbacks</h3>
           			<p>We care about our customers, that's why we get positive feedbacks.</p>
            		<h3>6.Fast guaranteed delivery</h3>
            		<p>We take responsibility for making sure that order is delivered to you at time.</p>
              </div>        
    		</div>
	</div>
</div>



<div class="contact-us-bottom">
  <h2>Contact Us</h2>
  <p>Address: 123 Ice Cream St, ludhiana, punjab</p>
  <p>Phone: 8569741230</p>
  <p>Email: info@theicecornershop.com</p>
</div>

<!-- FOOTER -->
<div class="container">
	<div class="footer">
    	<div class="row">
        	
            <div class="col-lg-4 col-lg-offset-4">
   		 		<img src="Images/Pink Green Vintage Retro Illustrative Simple Ice Cream Shop Logo.png" width="142" height="142">©copyright 2024
            </div>
            
         </div>
     </div>
</div>   


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

