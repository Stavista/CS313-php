<?php $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="style.css"/>

<h1 class="h">Every girl is a princess & Every princess deserves a friend! </h1>

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="nav-item <?php if ($file === 'browse') echo 'active' ?>">
            <a href="browse.php">Home</a>
        </li>
        <li class="nav-item <?php if ($file === 'cart') echo 'active' ?>">
            <a href="cart.php">My Cart</a>
        </li>
        <li class="nav-item <?php if ($file === 'checkout') echo 'active' ?>">
            <a href="checkout.php">Checkout</a>
        </li>
        
    </ul>
</nav>
