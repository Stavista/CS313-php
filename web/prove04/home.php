<?php
require("dbConnect.php");
$db = get_db();

$stmt = $db->prepare('SELECT name, id FROM business');
$stmt->execute();
$biz = $stmt->fetchAll(PDO::FETCH_ASSOC);

//$userId = $_GET["userId"];
//$stmt = $db->prepare('SELECT * FROM user u JOIN business b ON b.user_id = u.id WHERE u.id=:user_id');
//$stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
//$stmt->execute();
//$assets = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Your Businesses</title>
    </head>
    <body>
        <div class="container page" >
        <?php require("header.php");?>
            <h1>Your Businesses:</h1>
            <ul>
                <?php
                foreach ($biz as $biz)
                {
                    $name = $biz['name'];
                    $id = $biz['id'];
                    echo "<li class='dot'><h3><a href='business.php?businessId=$id'>$name</h3></li>";
                }
                ?>
            </ul>
        </div>
    </body>
</html>