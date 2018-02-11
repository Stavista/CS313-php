<?php $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="style.css"/>

<h1>Your Business Financials</h1>

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="nav-item <?php if ($file === 'home') echo 'active' ?>">
            <a href="home.php">Home</a>
        </li>
        <li class="nav-item <?php if ($file === 'update') echo 'active' ?>">
            <a href="update.php">Update</a>
        </li>
    </ul>
</nav>
