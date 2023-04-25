<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirmation | Hair Day</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <?php include 'includes/header.php'; ?>

                      <h3 align="center">Your order has been placed successfully. Thank you for shopping with us.</h3><hr>
                      <p align="center">Your order will be delivered in 2 days</p><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
        <?php 
        include("includes/footer.php");
        ?>
    </body>
</html>
</html>