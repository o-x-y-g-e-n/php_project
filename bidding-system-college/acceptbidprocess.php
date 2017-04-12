<?php 
session_start();
require_once("dbconnect.inc");
require_once("checkstatus.inc");

$accountid = $_SESSION['accountid'];
$itemid= $_POST['itemid'];
$bidprice= $_POST['bidprice'];

$sql = "insert into tblbidhistory(accountid,biditemid,bidprice,dtesubmitted) values($accountid, $itemid ,$bidprice , NOW())";
$result = mysqli_query($conn,$sql) or die("erro in adding bid to item ".mysqli_error());
?>
<html>
	<head><title>ADDING BID </title></head>
	<body>
	<p> bid succesfully accepted </p>
	<p> <a href="listbiditems.php"> BACK TO LIST </a></p>
	</body>
</html>
