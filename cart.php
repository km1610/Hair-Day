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
        <title>Cart | Hair Day</title>
        <link href="css/cart.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
            <?php include 'includes/header.php'; ?>
<center>
                    <table>
                        <?php
                        $sum = 0;$id='';
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . $row["Name"] . "</td><td>$ " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td><b>Total</b></td><td><b>$ " . $sum . "</b></td><td><a href='success.php?itemsid=" . $id . "' class='link'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {

                            echo "Heyy!! Your Cart is Empty. Please add items to the cart first!";
                        }
                        ?>
                        
                        <?php
                        ?>
                    </table>
                    </center>
        <?php include("includes/footer.php"); ?>
    </body>
</html>