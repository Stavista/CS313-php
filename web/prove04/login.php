<?php
require("dbConnect.php");
$db = get_db();

$stmt = $db->prepare('SELECT * FROM _user');
$stmt->execute();
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
        <?php require("header.php");?>

	<h1>Welcome!</h1>
    <h2>Please Login:</h2>
    
    <form method="post">
        <h3>Username: </h3><input type="text"><br>
        <br>
        <h3>Password: </h3><input type="text"><br>
        <br>
        <button type="submit">Login</button>
        <button type="reset">Cancel</button>
    </form>

        <?php
        foreach ($biz as $biz)
        {
            $name = $user['name'];
            $id = $user['id'];
            //echo "<li><h3><a href='business.php?userId=$id'>$name</h3></li>";
        }
        ?>
    
</body>
</html>