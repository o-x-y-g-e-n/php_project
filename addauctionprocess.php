<?php
session_start();
require_once("dbconnect.inc");
require_once("checkstatus.inc");
date_default_timezone_set('Asia/Kolkata');
$accountid=$_SESSION['accountid'];
$item = $_POST['item'];
$description=$_POST['description'];
$today=date('Y-m-d H:i:s');
$next_date= date('Y-m-d H:i:s', strtotime($today. ' + 7 days'));

$sql="insert into tblbiditems (accountid,biditem,biddesc,expDate) values ('$accountid','$item','$description','$next_date')";
$result=mysqli_query($conn,$sql) or die("error in bidding account :".mysqli_error());
$mess = "<p>AUCTION ITEM $item succesfully created</p>";
?>
<html>
	<head><title> process </title></head>
	<body>
	<?php echo "$mess" ?>
	<p> <a href="menu.php"> MENU </a></p>	
	</body>
</html>
