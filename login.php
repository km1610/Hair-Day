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

        <title>Login | Hair Day</title>

        <link href="css/book.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <main>
            <div class="container">
                <div class="info">
                    <center><h2>Login</h2></center>
                    <center><form action="login_submit.php" method="POST">
                        <table class="form">
                            <tr>
                                <td><label for="email">Email</label></td>
                                <td><input type="email" autofocus="on" name="e-mail" id="email" required = "true"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td><input type="password" name="password" id="password" required = "true"></td>
                            </tr>
                        </table>
                        <button class="link" type="submit" name="submit">LOGIN</button>
                        <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </form></center>
                </div>
            </div>
            <br>
            <center><a href="signup.php">Don't have an account? Register</a></center>
        </main>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>