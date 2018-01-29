<?php
session_start();
if(!empty($_SESSION["princess"])){
}else{
    $_SESSION["princess"]=array();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Princess Pets!</title>
  <script type="text/javascript" src="verify.js"></script>
  <link rel="stylesheet" href="style.css"/>
    
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body background="Background.JPG" ;>
    


    
    
    
<div class="container">

    <?php require("header.php");?>

 <form method="post" action="add.php">
    <table style="width:80%" ; border="1" ; align="center" ;>

    <tr>
      <td class="t">Raja $5,000</td>
      <td class="m"></td>
      <td class="t">Repunzel's Chameleon $2,000</td>
      <td class="m"></td>
    </tr>
    <tr>
      <td class="p"> <img src="Jasmine.gif" alt="Jasmine and Raja" width="400" />
          <button class="add" name="Raja" value="Raja">Add to Cart</button> </td>
      <td class="ch"></td>
      <td class="p"><img src="Tangled.gif" alt="Tangled Pet" width="400" />
          <button class="add" name="Pascal" value="Pascal">Add to Cart</button></td>
      <td class="ch"></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td class="t">Flounder $3,000</td>
      <td class="m"></td>
      <td class="t">Mushu and the Cricket $7,000</td>
      <td class="m"></td>
    </tr>
    <tr>
      <td class="p"><img src="Ariel.gif" alt="Ariel and Flounder" width="400" />
        <button class="add" name="Flounder" value="Flounder">Add to Cart</button></td>
      <td class="ch"></td>
      <td class="p"> <img src="Mulan.gif" alt="Mushu and Cricket" width="400" ; />
        <button class="add" name="Mushu" value="Mushu">Add to Cart</button></td>
      <td class="ch"></td>
        
    </tr>
    <tr>
      <td class="t">Toothless $10,000</td>
      <td class="m"></td>
      <td class="t"> Pocahontas's Racoon and Hummingbird $1,000</td>
      <td class="m"></td>
    </tr>
    <tr>
      <td class="p"><img src="Dragon.gif" alt="How To Train Your Dragon" width="400" ; />
        <button class="add" name="Toothless" value="Toothless">Add to Cart</button></td>
      <td class="ch"></td>
      <td class="p"> <img src="Pocahontas.gif" alt="Pocahontas Racoon and Hummingbird" width="400" ; /><button class="add" name="Racoon" value="Racoon">Add to Cart</button></td>
      <td class="ch"></td>
    </tr>
  </table>

     </form>
    </div>
    </body>
</html>