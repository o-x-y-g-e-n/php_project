<?php
session_start();
require_once("dbconnect.inc");
require_once("checkstatus.inc");
?>
<html>
<head><title> MENU </title></head>
<body>
	<h3>ITEMS TO AUCTION </h3>
	<ul>
	<li> <a href="addauctionitem.php">ADD ITEM TO AUCTION </a> </li>
	<li> <a href="listauctionitems.php"> ITEMS IN AUCTION LIST </a></li>	
</ul>
	<h3> AUCTION ITEMS FOR BIDDIN </h3>
	<ul>
	<li><a href="listbiditems.php"> LIST ITEMS FOR BIDDING </a></li>
	</ul>
	<p><a href="logout.php">LOGOUT </a></p>
</body>
</html>
