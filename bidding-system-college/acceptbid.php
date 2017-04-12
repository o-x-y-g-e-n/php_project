<?php
	session_start();
	require_once("dbconnect.inc");
	require_once("checkstatus.inc");
$itemid = $_GET['itemid'];
$item = $_GET['item'];
?>
<html>
	<head><title>PLACE BID</title></head>
	<body>
	<form id="form1" name="form1" method="post" action="acceptbidprocess.php">
	<p> Place Bid for <?php echo "$item" ; ?> </p>
	<p> BID PRICE :
	<input type= "text" name="bidprice" id="bidprice" />
	<input name="itemid" type="hidden" id="itemid" value="<?php echo "$itemid"; ?>" />
	<br />
	<input type="submit" name="button" id="button" value="Submit" />
	</p>
	</form>
	</body>
</html>
