<?php

require("dbConnect.php");
$db = get_db();

$businessId = htmlspecialchars($_GET["businessId"]);

$stmt = $db->prepare('SELECT name, id FROM business WHERE id = :biz_id');
$stmt->bindValue(':biz_id', $businessId, PDO::PARAM_INT);
$stmt->execute();
$biz = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($biz);

$stmt = $db->prepare('SELECT * FROM assets a JOIN business b ON a.business_id = b.id WHERE b.id=:biz_id');
$stmt->bindValue(':biz_id', $businessId, PDO::PARAM_INT);
$stmt->execute();
$assets = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $db->prepare('SELECT * FROM liabilities l JOIN business b ON l.business_id = b.id WHERE b.id=:biz_id');
$stmt2->bindValue(':biz_id', $businessId, PDO::PARAM_INT);
$stmt2->execute();
$liabilities = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <div class="container page">
            <?php require("header.php");?>

            <?php
            foreach ($biz as $biz)
            {
                $name = $biz['name'];
                $id = $biz['id'];
                echo "<h1>Update " .$biz['name']. " Log</h1>
            <h4>Please enter raw numbers only. No commas or dollar signs.</h4>";

            }


            ?>

            <form method="post" action="insertLog.php">
                <input type="hidden" name="biz_id" value="<?php echo $businessId;?>">
                Date:
                <br><input type="date" name="date"><br>

                <h2>Assets</h2>
                Cash and Equivalents:
                <br><input type="number" name="c_e"><br>
                Accounts Recievable:
                <br><input type="number" name="ar"><br>
                Inventory:
                <br><input type="number" name="inventory"><br>
                Other:
                <br><input type="number" name="a_other"><br>

                <br>

                <h2>Liabilities</h2>
                Accounts Payable:
                <br><input type="number" name="ap"><br>
                Debt Itemization:
                <br><input type="number" name="di"><br>
                Long Term Obligations:
                <br><input type="number" name="lto"><br>
                Leases:
                <br><input type="number" name="leases"><br>
                Other:
                <br><input type="number" name="l_other"><br>

                <br><button type="reset"><p class="buttonText">Reset All Values</p></button>

                <p>Note that once you commit to Log, you will not be able to alter or remove financial information logged</p>

                <button type="submit"><h3 class="buttonText">Commit To Log</h3></button>
            </form>

        </div>
    </body>
</html>