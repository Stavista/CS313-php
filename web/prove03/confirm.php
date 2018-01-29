<?php
session_start();
$cart = array($_SESSION["princess"]);
$username = htmlspecialchars($_REQUEST['Name']);
$street = htmlspecialchars($_REQUEST['Street']);
$state = htmlspecialchars($_REQUEST['State']);
$zip = htmlspecialchars($_REQUEST['Zip']);

session_start();
$princess = $_SESSION["princess"];
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
    <h1>Confirmation Page: </h1>
        

    <h2> <?php echo " $username, Your Pets: ";?></h2>
    <?php for($i = 0 ; $i < count($_SESSION['princess']) ; $i++) {
     echo '<h3>'.$_SESSION['princess'][$i].'</h3>';
     }  ?>
        
        
        <h2> Will be shipped to the following address: </h2>
    <h3>
        <?php 
            echo "$username <br/> 
            $street $state, $zip";
        ?>
    </h3>
    <h2>Thank You!</h2>
        </div>
  </body>
</html>