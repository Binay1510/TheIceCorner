<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminpage.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Set the width of the side navigation */
    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    /* Style the side navigation links */
    .sidenav a {
      padding: 10px 8px 10px 16px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
    }

    /* Change the color of the side navigation links on hover */
    .sidenav a:hover {
      color: #f1f1f1;
    }

    /* Style the main content */
    .main {
      margin-left: 250px; /* Adjusted to match the width of the sidenav */
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="sidenav" id="mySidenav">
  <a href="#">Logged In As - Admin </a>
  <a href="../addProduct.php">Add Product</a>
  <a href="user.php">Users</a>
  <a href="neworder.php">New Orders</a>
  <a href="index.php">Logout</a>
</div>

<!-- <div class="main" id="main">
  <span class="hamburger" onclick="openNav()">&#9776;</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("main").style.marginLeft = "250px";
}


</script> -->

</body>
</html>