<?php

require("includes/common.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Hair Day</title>
        <link href="css/index.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <main>
            <div class="promotion"><img src="img/intro-bg_1.jpg" width="100%"><!--<span class="offer"><b>20% Off</b><br>on Hair Spa</span>--></div>
            <div class="container">
                <div class="provisions"><h2>Our Services</h2><p>Experience the highest quality hair care services at our salon, where we cater to your individual needs and preferences.</p><br><a class="link" href="services.php">Click here to learn more</a></div>
                <div class="provisions"><h2>Book an appointment</h2><p>Easily book your next appointment with us and indulge in a luxurious hair transformation.</p><br><br><a class="link" href="book.php">Click here to book an appointment</a></div>
                <div class="provisions"><h2>Our Products</h2><p>Take home the best with our premium hair care products.</p><br><br><a class="link" href="products.php">Click here to view our products</a></div>
            </div>
        </main>

        <?php
        include 'includes/footer.php';
        ?>
   
    </body> 
</html>