
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <nav class="profile">
                        <a title="Cart" href="cart.php">
                            <i id="cart" class="fa" style="font-size:24px">&#xf07a;</i>
                        </a><a title="Order History" href="orderhistory.php">My Orders</a><a title="My Account" href="settings.php">My Account</a><a title="Logout" href="logout_script.php">Logout</a>
                    </nav>

                    <?php
                } else {
                    ?>
                    <nav class="profile">
                        <a title="SignUp" href="signup.php">Sign Up</a><a title="Login" href="login.php">Login</a>
                    </nav>
 <?php
                    }
                    ?>
<header><img src="img/Artboard 19.png" height="200px"></header>
<nav>
    <a href="index.php">Home</a>
    <a href="services.php">Our Services</a>
    <a href="products.php">Our Products</a>
    <a href="aboutus.php">About Us</a>
</nav>
