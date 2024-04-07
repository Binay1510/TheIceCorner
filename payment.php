<?php
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        .success-page{
            margin-top:200px;
            margin-left:460px;
            align-items:center;
        }
    </style>
</head>
<body>
    <!-- To hide the content of cart.php while still being able to access its variables, you can use a combination of output buffering and including the file -->
    <?php
    include('header.php');
    
    ob_start();
    require_once "cart.php";
    $output = ob_get_clean();

    // $grand_total=0;
    // $grand_total=$grand_total+(  $fetch_cart_pro['price']*$fetch_cart_pro['quantity']);
                   
    ?>
    <div class="success-page">
        <h2>Order sucessfull total payment is <span style="color:#ffcc33;"><b> ₹<?php echo $grand_total?> </b></span></h2>
            <h3>Thanks for Ordering.Visit Again....</h3>
    </div>
</body>
</html>