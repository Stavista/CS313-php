<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Checkout</title>
        <script type="text/javascript" src="verify.js"></script>
        <link rel="stylesheet" href="style.css"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    
    <body background="Background.JPG">
    <div class="containter">
    <?php require("header.php");?>

    <h2 class="h2"> Checkout Below by Entering Your Information and Pressing Submit: </h2>

    <form action="confirm.php" method="post">
    Please Enter Your First and Last Name: <br>
    <input type="text" name="Name" /><br>

    Please Enter Your Address: P.O. Box 42 Huslia, XX, 00000<br>
    <input type="text" name="Street" />
    <input type="text" name="State" oninput="checkState(this.value, 'address');" size="2" />
    <input type="text" name="Zip"  oninput="checkZip(this.value, 'address1');" size="5" /> <br />
    <span class='address' style='color:red'>Invalid state</span>
    <span class='address1' style='color:red'>Invalid zip code</span> <br />


    Please Enter Your Phone Number: 000-000-0000 <br />
    <input oninput="checkTel(this.value, 'tel');" size="12" /> <br />
    <span class='tel' style='color:red'>Invalid phone number</span><br />
    <div>
      <h2 class="h2"> Total: <span id="totalCostSpan"></span></h2>

    </div>

    <h4 class="h4"> Please Enter Your Payment Information Below</h4>

    Card Type: (Visa, MasterCard, or American Express) <br />
    <input oninput="checkType(this.value, 'type');" size="19" /> <br />
    <span class='type' style='color:red'>Invalid credit card type</span> <br />

    Credit card number: 0000 0000 0000 0000<br/>
    <input oninput="checkCard(this.value, 'card1');" onblur="checkCard(this.value, 'card1');" size="19" /><br />
    <span class='card1' style='color:red'>Invalid credit card number</span><br />

    Expiration Date: 00-00<br />
    <input oninput="checkExp(this.value, 'exp');" size="5" /><br />
    <span class='exp' style='color:red'>Invalid expiration date</span><br/>

    <button type="submit" value="Submit">SUBMIT</button>

    <button type="reset">RESET</button>
     </form>  
    </div>
  </body>
</html>