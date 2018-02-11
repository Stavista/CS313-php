<!DOCTYPE html>
<html>
<body>
<?php require("header.php");?>

<h1>Update</h1>

<form>
    <h2>Assets</h2>
    Date (yyyy-mm-dd):
    <br><input type="text" name="i_date"><br>
    Cash and Equivalents:
    <br><input type="number" name="c&e"><br>
    Accounts Recievable:
    <br><input type="number" name="ar"><br>
    Inventory:
    <br><input type="number" name="invenory"><br>
    Other:
    <br><input type="number" name="i_other"><br>
    
    <br>

    <h2>Liabilities</h2>
    Date (yyyy-mm-dd):
    <br><input type="text" name="l_date"><br>
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
    
    <br><button type="reset">Reset All Values</button>
    
    <p>Note that once you commit to Log, you will not be able to alter or remove information</p>
    
    <button type="submit"><h3>Commit To Log</h3></button>
</form>


</body>
</html>