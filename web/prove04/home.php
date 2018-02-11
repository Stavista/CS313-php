<?php
try
{
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
//Postgres on Local Machine    
//  $user = 'temp';
//  $password = 'pass';
//  $db = new PDO('pgsql:host=localhost;dbname=postgres', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

$stmt = $db->prepare('SELECT name, id FROM business');
$stmt->execute();
$biz = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
        <?php require("header.php");?>

	<h1>Welcome User</h1>
    <h2>Your Businesses:</h2>
    <ul>
        <?php
        foreach ($biz as $biz)
        {
            $name = $biz['name'];
            $id = $biz['id'];
            echo "<li><h3><a href='business.php?businessId=$id'>$name</h3></li>";
        }
        ?>
    </ul>
    
</body>
</html>