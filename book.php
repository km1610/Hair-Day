<?php

require("includes/common.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/book.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Book an Appointment | Hair Day</title>
    </head>
    <body>
    <?php
include 'includes/header.php';
?>
       <main>
            <div class="container">
                <div class="info">
                    <center><h2>Book an Appointment</h2></center>
                    <center><form action="book_script.php" method="POST">
                        <table class="form">
                            <tr>
                                <td colspan=2><input type="text" placeholder="Enter Fullname" id="name" name="name"></td>
                            </tr>
                            <tr>
                                <td colspan=2><input type="email" placeholder="Enter Email ID" id="email" name="email"></td>
                            </tr>
                            <tr>
                                <td colspan=2><input type="tel" placeholder="Enter Contact No." id="cno" name="cno"></td>
                            </tr>
                            <tr>
                                <td colspan=2><input type="date" id="date" name="date"></td>
                            </tr>
                            <tr>
                                <td colspan=2><input type="time" id="time" name="time"></td>
                            </tr>
                            <tr>
                                <td><label>Services</label></td>
                                <td>
                                    <table>
                                    <tr>
                                        <td><input type="checkbox" value="Haircuts and styling" id="service1" onclick="select()">
                                        <label for="service1">Haircuts and styling</label></td>                               
                                        <td><input type="checkbox" value="Color services" id="service2" onclick="select()">
                                        <label for="service2">Color services</label></td>
                                    </tr>
                                    <tr>                                                                  
                                        <td><input type="checkbox" value="Texture services" id="service3" onclick="select()">
                                        <label for="service3">Texture services</label></td>                               
                                        <td><input type="checkbox" value="Hair treatments" id="service4" onclick="select()">
                                        <label for="service4">Hair treatments</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="Updos" id="service5" onclick="select()">
                                        <label for="service5">Updos</label></td>
                                        <td><input type="checkbox" value="Blowouts & hair services" id="service6" onclick="select()">
                                        <label for="service6">Blowouts & hair services</label></td>
                                    </tr>
                                    </table>
                                </td>
                                <tr>
                                    <td colspan=2 id="servicestext"></td>
                                </tr>
                            </tr>
                            <br>
                        </table>
                        <button class="link" href="products.php">SUBMIT</button>
                    </form></center> 



                </div>
            </div>
        </main>
        <?php
include 'includes/footer.php';
?>
    </body>
</html>