<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Hair Day</title>
        <link href="css/products.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <main>
            <div class="searchbar">
                <input type="search" class="searchproduct" placeholder="Search" onkeyup="searchproduct()">
            </div>
            <br>
            <div class="filter">
                <ul class="filter-nav" style="list-style: none;display: flex;">
                    <!-- <li>
                        <div class="dropdown">
                            <div class="filter-heading" style="width: max-content;">Size ↴</div>
                            <div class="dropdown-options" style="background-color: white;">
                                <ul>
                                <li>Small</li>
                                <li>Medium</li>
                                <li>Large</li>
                                </ul>
                            </div>
                        </div>
                    </li> -->
                    <li>
                        <div class="dropdown">
                            <div class="filter-heading" style="width: max-content;">Price ↴</div>
                            <div class="dropdown-options" style="background-color: white; padding: 20px;">
                                <input type="range" id="price-range" min="0" max="50" value="50" oninput="price_range()"><span id="price-range-value">less than $50</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <br>
            <hr>
            <div class="container">
                <div class="product">
                    <img src="img/products/Shampoo.png" class="productimg">
                    <div class="productinfo">
                        <p class="productname">Shampoo</p>
                        <p class="wlbutton fa fa-heart-o heart" onclick="addtowishlist(this)"></p>
                        <p class="prices">Price: $20</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <a class="link" href="login.php" role="button">Add to cart</a>
                    <?php
                        } else {
                            if (check_if_added_to_cart(1)) {
                                echo '<a href="#" class="link" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="link">Add to cart</a>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="product">
                    <img src="img/products/Conditioner.png" class="productimg">
                    <div class="productinfo">
                        <p class="productname">Conditioner</p>
                        <p class="wlbutton fa fa-heart-o heart" onclick="addtowishlist(this)"></p>
                        <p class="prices">Price: $20</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <a class="link" href="login.php" role="button">Add to cart</a>
                    <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="link" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="link">Add to cart</a>
                                <?php
                            }
                        }
                    ?>

                </div>
                <div class="product">
                    <img src="img/products/Oil.png" class="productimg">
                    <div class="productinfo">
                        <p class="productname">Hair Oil</p>
                        <p class="wlbutton fa fa-heart-o heart" onclick="addtowishlist(this)"></p>
                        <p class="prices">Price: $30</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <a class="link" href="login.php" role="button">Add to cart</a>
                    <?php
                        } else {
                            if (check_if_added_to_cart(3)) {
                                echo '<a href="#" class="link" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="link">Add to cart</a>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="product">
                    <img src="img/products/Serum.png" class="productimg">
                    <div class="productinfo">
                        <p class="productname">Hair Serum</p>
                        <p class="wlbutton fa fa-heart-o heart" onclick="addtowishlist(this)"></p>
                        <p class="prices">Price: $30</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <a class="link" href="login.php" role="button">Add to cart</a>
                    <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="link" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="link">Add to cart</a>
                                <?php
                            }
                        }
                    ?>
                </div>            
                <div class="product">
                    <img src="img/products/Spray.png" class="productimg">
                    <div class="productinfo">
                        <p class="productname">Hair Spray</p>
                        <p class="wlbutton fa fa-heart-o heart" onclick="addtowishlist(this)"></p>
                        <p class="prices">Price: $25</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <a class="link" href="login.php" role="button">Add to cart</a>
                    <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                echo '<a href="#" class="link" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="link">Add to cart</a>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="product">
                    <img src="img/products/Texturizer.png" class="productimg">
                    <div class="productinfo">
                        <p class="productname">Hair texturizer</p>
                        <p class="wlbutton fa fa-heart-o heart" onclick="addtowishlist(this)"></p>
                        <p class="prices">Price: $35</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <a class="link" href="login.php" role="button">Add to cart</a>
                    <?php
                        } else {
                            if (check_if_added_to_cart(6)) { 
                                echo '<a href="#" class="link" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="link">Add to cart</a>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="no-items"><center>No items to display</center></div>
        </main>
        <?php include("includes/footer.php"); ?>
        <script type="text/javascript" src="js/products.js"></script>
    </body>

</html>