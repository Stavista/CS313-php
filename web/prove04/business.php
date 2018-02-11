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
$businessId = $_GET["businessId"];
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
	<title>Business Summary</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
        <?php require("header.php");?>

	<h1>Business Log</h1>
    <button><a href="update.php">Update</a></button>

    <h2>Business Summary</h2>
    <table border="1">
        <tr>
            <th>Date</th>
            <th>Total Assets</th>
            <th>Total Liabilites</th>
            <th>Working Capital</th>
            <th>Assets to Liailities Ratio</th>
            <th>Owner's Contribution %</th>
            <th>Creditors Contribution %</th>
            <th>Accounts Receivable</th>
            <th>Accounts Payable</th>
        </tr>
    </table>
    
    <h2>Assets</h2>
    <table border="1">
        <tr>
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
        <tr>
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

	
</body>
</html>