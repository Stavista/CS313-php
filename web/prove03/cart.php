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
        
        <form method="post" action="remove.php">
     
    <?php for($i = 0 ; $i < count($_SESSION['princess']) ; $i++) {
            echo '<h3>'.$_SESSION['princess'][$i].'</h3>';
            
            if ($_SESSION['princess'][$i] == "Mushu and Cricket"){
                echo '<button class="add" name="Remove_Mushu" value="Remove_Mushu">Remove '.$_SESSION['princess'][$i].'</button>';
            }
            else if ($_SESSION['princess'][$i] == "Pocahontas Racoon and Hummingbird"){
                echo '<button class="add" name="Remove_Racoon" value="Remove_Racoon">Remove Pocahontas Pets</button>';
            }
            else{
            echo '<button class="add" name="Remove_'.$_SESSION['princess'][$i].'" value="Remove_'.$_SESSION['princess'][$i].'">Remove '.$_SESSION['princess'][$i].'</button>';
            }
    }
    ?>
            <br/>
        <button class="add" name="clear" value="clear">Clear Cart</button>
            </form>
<form method="post" action="checkout.php"><button class="add">Continue to Checkout</button>
</form>
    </div>    
  </body>
</html>