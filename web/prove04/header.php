<?php $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="myStyle.css"/>


<img src="city.jpeg" width="100%">
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="nav-item <?php if ($file === 'home')?>">
            <a href="home.php"> ~ Your Businesses</a>
        </li>
    </ul>
</nav>
