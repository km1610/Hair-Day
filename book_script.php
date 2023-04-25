<?php

require("includes/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $contact = $_POST['cno'];
  $contact = mysqli_real_escape_string($con, $contact);

  $date = $_POST['date'];
  $revdate=strrev($date);
  $revdate = mysqli_real_escape_string($con, $revdate);

  $time = $_POST['time'];
  $time = mysqli_real_escape_string($con, $time);
  

    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO bookings(name, email, contact, date, time)VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $date . "','" . $time . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));

header('location: thankyou.php');
?>