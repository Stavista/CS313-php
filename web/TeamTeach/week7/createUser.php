<?php
require("dbConnect.php");
$db = get_db();

$password = htmlspecialchars($_POST['password']);
$username = htmlspecialchars($_POST['username']);

var_dump($password);
var_dump($username);

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
var_dump($passwordHash);

$query = "INSERT INTO _user(username, password) VALUES (:username, :password)";
$stmt = $db->prepare($query);
echo "<h4>After Insert is prepared</h4>";

$stmt->bindvalue(":username", $username, PDO::PARAM_STR);
$stmt->bindvalue(":password", $passwordHash, PDO::PARAM_STR);
echo "<h4>Bound</h4>";
try {
	// SB: This was silently failing on me a lot, so to help debug it, I put it inside a try catch block. It was generating an exception, and it helped me track down my problem.
	$stmt->execute();
} catch (Exception $ex) {
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	var_dump($ex);
	die();
} 
echo "<h4>Execute</h4>";
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<h4>Result</h4>";

$newUrl = "signIn.php";
header("Location: $newUrl");
die();

?>