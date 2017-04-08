<?php
session_start();
require_once("dbconnect.inc");
require_once("checkstatus.inc");

$accountid=$_SESSION['accountid'];
$item = $_POST['item'];
$description=$_POST['description'];

$sql="insert into tblbiditems (accountid,biditem,biddesc) values ('$accountid','$item','$description')";
$result=mysqli_query($conn,$sql) or die("error in bidding account :".mysqli_error());
$mess = "<p>AUCTION ITEM $item succesfully created</p>";
?>
<html>
	<head><title> process </title></head>
	<body>
	<?php echo "$mess" ?>;
	<p> <a href="menu.php"> MENU </a></p>	
	</body>
</html>
