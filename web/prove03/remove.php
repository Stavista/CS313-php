<?php
session_start(); 
require("header.php");

// Remove items from cart

function deleteElement($element, &$array){
    $index = array_search($element, $array);
    if($index !== false){
        if(isset($array[$index])){
            
            // remove item at index
            unset($array[$index]);
            // 'reindex' array
            $array = array_values($array);
        }
    }
}

$Raja = $_POST["Remove_Raja"];
$Pascal = $_POST["Remove_Pascal"];
$Flounder = $_POST["Remove_Flounder"];
$Mushu = $_POST["Remove_Mushu"];
$Toothless = $_POST["Remove_Toothless"];
$Racoon = $_POST["Remove_Racoon"];

if($Raja == 'Remove_Raja'){
    deleteElement('Raja', $_SESSION['princess']);
}
if ($Pascal == 'Remove_Pascal'){
    deleteElement('Pascal', $_SESSION['princess']);
}
if ($Flounder == 'Remove_Flounder'){
    deleteElement('Flounder', $_SESSION['princess']);
}
if ($Mushu == "Remove_Mushu"){
    deleteElement("Mushu and Cricket", $_SESSION['princess']);
}
if ($Toothless == 'Remove_Toothless'){
    deleteElement('Toothless', $_SESSION['princess']);
}
if ($Racoon == "Remove_Racoon"){
    deleteElement("Pocahontas Racoon and Hummingbird", $_SESSION['princess']);
}

header('Location: http://localhost/prove03/cart.php');

//header('Location: https://fathomless-castle-58152.herokuapp.com/prove03/browse.php');

?>
