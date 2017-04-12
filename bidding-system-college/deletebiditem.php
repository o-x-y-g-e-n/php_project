<?php 
session_start();
require_once("dbconnect.inc");
require_once("checkstatus.inc");

$deleteid=$_GET['biditemid'];
$sql="delete from tblbiditems where biditemid='$deleteid'";
$result=mysqli_query($conn,$sql) or die("error in deleting the auction item:".mysqli_error());
?>
<html>
	<head><title>DELETE</title></head>
	<body>
	<p>AUCTION item succesfuuly deleted </p>
	<p><a href="menu.php">MENU </a></p>

	</body>
</html>
