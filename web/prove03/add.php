<?php
session_start(); 
require("header.php");

$Raja = $_POST["Raja"];
$Pascal = $_POST["Pascal"];
$Flounder = $_POST["Flounder"];
$Mushu = $_POST["Mushu"];
$Toothless = $_POST["Toothless"];
$Racoon = $_POST["Racoon"];
$clear = $_POST["clear"];

if($Raja != ''){
    array_push($_SESSION['princess'],"Raja");
}
if ($Pascal != ''){
    array_push($_SESSION['princess'],"Pascal");
}
if ($Flounder != ''){
    array_push($_SESSION['princess'],"Flounder");
}
if ($Mushu != ''){
    array_push($_SESSION['princess'],"Mushu and Cricket");
}
if ($Toothless != ''){
    array_push($_SESSION['princess'],"Toothless");
}
if ($Racoon != ''){
    array_push($_SESSION['princess'],"Pocahontas Racoon and Hummingbird");
}
if ($clear != ''){
    $_SESSION["princess"]=array();
}

//header('Location: https://fathomless-castle-58152.herokuapp.com/prove03/browse.php');

?>
