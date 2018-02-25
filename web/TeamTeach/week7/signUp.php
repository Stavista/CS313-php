<?php
require("dbConnect.php");
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
</head>
<body>
    <h1>Please Sign Up!</h1>
    <form method="post" action="createUser.php">
        Username: <input type="text" name="username" value="username">
        <br><br>
        Password (needs to be 7 characters): <input type="text" name="password" value="password">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>