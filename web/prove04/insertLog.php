<?php
require("dbConnect.php");

$db = get_db();

$biz_id = htmlspecialchars($_POST["biz_id"]);

//Assets
$a_biz_id = (int)htmlspecialchars($_POST["biz_id"]);
$a_date = htmlspecialchars($_POST['date']);
$c_e = (int) htmlspecialchars($_POST['c_e']);
$ar = (int) htmlspecialchars($_POST['ar']);
$inventory = (int) htmlspecialchars($_POST['inventory']);
$a_other = (int) htmlspecialchars($_POST['a_other']);

//Liabilities
$l_biz_id = (int) htmlspecialchars($_POST["biz_id"]);
$l_date = htmlspecialchars($_POST['date']);
$ap = (int) htmlspecialchars($_POST['ap']);
$debt = (int) htmlspecialchars($_POST['di']);
$long_term = (int) htmlspecialchars($_POST['lto']);
$leases = (int) htmlspecialchars($_POST['leases']);
$l_other = (int) htmlspecialchars($_POST['l_other']);

echo "<h3>got variables</h3>";

var_dump($l_date);
var_dump($l_biz_id);
var_dump($c_e);
var_dump($ar);
var_dump($inventory); 
var_dump($a_other);
var_dump($ap);
var_dump($debt);
var_dump($long_term);
var_dump($leases);
var_dump($l_other);


$a_query = "INSERT INTO assets(_date, business_id, cash_and_equivalents, accounts_recievable, inventory, other) 
VALUES (:a_date, :a_business_id, :cash_and_equivalents, :accounts_recievable, :inventory, :a_other)";
$a_stmt = $db->prepare($a_query);
echo "<h3>after Assets Query</h3>";



$l_query = "INSERT INTO liabilities(_date, business_id, accounts_payable, debt_itemization, long_term_obligations, leases, other) 
VALUES (:l_date, :l_business_id, :accounts_payable, :debt_itemization, :long_term_obligations, :leases, :l_other)";
$l_stmt = $db->prepare($l_query);
echo "<h3>after Liabilities Query</h3>";

// Bind any parameters
//Assets
$a_stmt->bindValue(":a_date", $a_date, PDO::PARAM_STR);
$a_stmt->bindValue(":a_business_id", $a_biz_id, PDO::PARAM_INT);
$a_stmt->bindValue(":cash_and_equivalents", $c_e, PDO::PARAM_INT);
$a_stmt->bindValue(":accounts_recievable", $ar, PDO::PARAM_INT);
$a_stmt->bindValue(":inventory", $inventory, PDO::PARAM_INT);
$a_stmt->bindValue(":a_other", $a_other, PDO::PARAM_INT);
echo "<h3>Bound Assets variables</h3>";


//Liabilities
$l_stmt->bindValue(":l_date", $l_date, PDO::PARAM_STR);
$l_stmt->bindValue(":l_business_id", $l_biz_id, PDO::PARAM_INT);
$l_stmt->bindValue(":accounts_payable", $ap, PDO::PARAM_INT);
$l_stmt->bindValue(":debt_itemization", $debt, PDO::PARAM_INT);
$l_stmt->bindValue(":long_term_obligations", $long_term, PDO::PARAM_INT);
$l_stmt->bindValue(":leases", $leases, PDO::PARAM_INT); 
$l_stmt->bindValue(":l_other", $l_other, PDO::PARAM_INT);
echo "<h3>Bound Liabilities variables</h3>";

try {
    // SB: This was silently failing on me a lot, so to help debug it, I put it inside a try catch block. It was generating an exception, and it helped me track down my problem.
    $a_stmt->execute();
    echo "<h3>after Assets ex</h3>";

    $l_stmt->execute();
    echo "<h3>after Liabilities ex</h3>";


} catch (Exception $ex) {
    // If this were in production, you would not want to echo
    // the details of the exception.
    //	echo "Error connecting to DB. Details: $ex";
    //	var_dump($ex);
    $biz_page = "business.php?businessId=$biz_id";
    header("Location: $biz_page");
    die();
} 


$biz_page = "business.php?businessId=$biz_id";
header("Location: $biz_page");
die();

?>