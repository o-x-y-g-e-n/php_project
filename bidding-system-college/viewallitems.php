<?php
require_once('dbconnect.inc');
?>
<html>
	<head><title>VIEW ALL</title></head>
	<body>
	<p>
	<?php
		$sql="select tblbiditems.biditemid , tblbiditems.biditem , tblaccount.username from tblbiditems natural join tblaccount";
		$result=mysqli_query($conn,$sql) or die("error in deleting auction items:".mysql_error());
		echo "<p> items for auction </p>";
		echo "<ul>";
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$itemid = $row['biditemid'];
			$item = $row['biditem'];
			$auctionby= $row['username'];
			echo "<li>$item auctioned off by $auctionby <a href='viewbiditems.php?itemid=$itemid'>VIEW ALL BIDS </a></li>";
		}
		echo "</ul>";
	?>
	</p>
	<p><a href="menu.php"> MENU </a></p>
	</body>
</html>
