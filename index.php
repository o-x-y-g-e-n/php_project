<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="2">
	<title>WELCOME</title>
</head>
<body>
	<?php
	require_once("dbconnect.inc");
	$pages= mysqli_query($conn,'SELECT biditemid FROM tblbiditems');
	$rows = mysqli_num_rows($pages);
	if($rows)
	{
		require_once("delete.inc");
	}
	?>
	<h1> MY BIDDING SYSTEM </h1>
	<img src="1.jpg" alt="icon" width="1024" height="350">
	<p><h4> WELCOME YOU </h4><p>
<p> <a href="addaccount.html">CREATE ACCOUNT </a></p>
<p><a href="login.php"> LOGIN </a></p>
<p> <a href="viewallitems.php">VIEW BID-ITEMS</a></p>
</body>
</html>
