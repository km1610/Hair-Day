<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Hair Day</title>
        <link href="css/book.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <main>
            <div class="container">
                <div class="info">
                    <center><h2>Sign Up</h2></center>
                    <center><form action="signup_script.php" method="POST">
                        <table class="form">
                            <tr>
                                <td><label for="name">Name</label></td>
                                <td><input type="text" autofocus="on" name="name" placeholder="Name" id="name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"></td>
                            </tr>
                            <tr>
                                <td><label for="name">Email</label></td>
                                <td><input type="email" name="e-mail" placeholder="Email ID" id="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td><input type="password" placeholder="Password" name="password" id="password" required = "true"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Contact</label></td>
                                <td><input type="text"  placeholder="Contact (ex. 8444844863)" maxlength="10" size="10" name="contact" required = "true"><?php if(isset($_GET['m2'])) echo $_GET['m2']; ?></td>
                            </tr>
                            <tr>
                                <td><label for="city">City</label></td>
                                <td><input type="text" placeholder="City" name="city" id="city" required = "true"></td>
                            </tr>
                            <tr>
                                <td><label for="address">Address</label></td>
                                <td><input  type="text" placeholder="Address" name="address" id="address" required="true"></td>
                            </tr>
                        </table>
                        <button class="link" type="submit" name="submit">REGISTER</button>
                        <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </form></center>
                </div>
            </div>
            <br>
            <center><a href="login.php">Already have an account? Login</a></center>
        </main>
        <?php include "includes/footer.php"; ?>
    </body>
</html>