<?php

require("dbConnect.php");
$db = get_db();

$businessId = htmlspecialchars($_GET["businessId"]);

$stmt = $db->prepare('SELECT name, id FROM business WHERE id = :biz_id');
$stmt->bindValue(':biz_id', $businessId, PDO::PARAM_INT);
$stmt->execute();
$biz = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($biz);

$stmt = $db->prepare('SELECT * FROM assets a JOIN business b ON a.business_id = b.id WHERE b.id=:biz_id ORDER BY _date DESC');
$stmt->bindValue(':biz_id', $businessId, PDO::PARAM_INT);
$stmt->execute();
$assets = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $db->prepare('SELECT * FROM liabilities l JOIN business b ON l.business_id = b.id WHERE b.id=:biz_id ORDER BY _date DESC');
$stmt2->bindValue(':biz_id', $businessId, PDO::PARAM_INT);
$stmt2->execute();
$liabilities = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Business Summary</title>
    </head>
    <body>
        <div class="container page">
            <?php require("header.php");?>
            <?php
            foreach ($biz as $biz)
            {
                $name = $biz['name'];
                $id = $biz['id'];
                echo "<h1>Welcome to your " .$biz['name']. " Log</h1>";

                echo "<button><a href='update.php?businessId=$id'><h3>Add Financial Log (Update)</h3></a></button>";
            }


            ?>

            <h2>Assets</h2>
            <table border="1">
                <tr class="th">
                    <th>Date</th>
                    <th>Cash and Equivalents</th>
                    <th>Accounts Recievable</th>
                    <th>Inventory</th>
                    <th>Other</th>
                </tr>
                <?php
                foreach ($assets as $row)
                {
                    $date = $row['_date'];
                    echo "<tr><td>$date</td>";
                    echo '<td>$' . $row['cash_and_equivalents'] . '</td>';
                    echo '<td>$' . $row['accounts_recievable'] . '</td>';
                    echo '<td>$' . $row['inventory'] . '</td>';
                    echo '<td>$' . $row['other'] . '</td></tr>';
                }
                ?>        
            </table>

            <h2>Liabilities</h2>
            <table border="1">
                <tr class="th">
                    <th>Date</th>
                    <th>Accounts Payable</th>
                    <th>Debt Itemization</th>
                    <th>Long Term Obligations</th>
                    <th>Leases</th>
                    <th>Other</th>
                </tr>
                <?php
                foreach ($liabilities as $row)
                {
                    echo '<tr><td>' . $row['_date'] . '</td>';
                    echo '<td>$' . $row['accounts_payable'] . '</td>';
                    echo '<td>$' . $row['debt_itemization'] . '</td>';
                    echo '<td>$' . $row['long_term_obligations'] . '</td>';
                    echo '<td>$' . $row['leases'] . '</td>';
                    echo '<td>$' . $row['other'] . '</td></tr>';
                }
                ?>        
            </table>

        </div>
    </body>
</html>