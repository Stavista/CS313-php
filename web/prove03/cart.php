<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Checkout</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    
    <body background="Background.JPG">
    <div class="container">
    <?php require("header.php");?>

    <h2 class="h2"> Your Cart Contains the Following Pets: </h2>
        <form method="post" action="add.php">
     
    <?php for($i = 0 ; $i < count($_SESSION['princess']) ; $i++) {
     echo '<h3>'.$_SESSION['princess'][$i].'</h3>';
}  ?>
        <button class="add" name="clear" value="clear">Clear Cart</button>
            </form>
<form method="post" action="checkout.php"><button class="add">Continue to Checkout</button>
</form>
    </div>    
  </body>
</html>