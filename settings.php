<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Hair Day</title>
        <link href="css/book.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <main>
            <div class="container">
                <div class="info">
                    <center><h2>Change Password</h2></center>
                    <center><form action="settings_script.php" method="POST">
                        <table class="form">
                            <tr>
                                <td><label>Old Password</label></td>
                                <td><input type="password" name="old-password"  placeholder="Old Password" required = "true"></td>
                            </tr>
                            <tr>
                                <td><label>New Password</label></td>
                                <td><input type="password" name="password" placeholder="New Password" required = "true"></td>
                            </tr>
                            <tr>
                                <td><label>Re-Type Password</label></td>
                                <td><input type="password" name="password1"  placeholder="Re-type New Password" required = "true"></td>
                            </tr>
                        </table>
                        <button class="link" type="submit" name="submit">CHANGE</button>
                        <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </form></center>
                </div>
            </div>
        </main>
        <?php include("includes/footer.php"); ?>
    </body>
</html>