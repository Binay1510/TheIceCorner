<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>
    .hiemail{
    position: absolute;
        top: 0;
        right: 10px;
}
    .collapse{
    font-size: 20px;
}
.navbar nav ul{
    padding-right: 20px;
}
.custom-navbar{
    background-color: #DCF2F1;
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
        <!-- <li class="nav-item">
          <a class="nav-link" href="reservation.php">Reservation</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart</a>
          </li>
    
      </ul>
    </div>
    <div class="hiemail">
              <?php
                if(isset($_GET['email'])){
                        $email = $_GET['email'];
                        echo " Hi  ".$email ;
                }
                        ?>
            </div>
  </nav>
</body>
</html>