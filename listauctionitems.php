<?php
	session_start();
	require_once("dbconnect.inc");
	require_once("checkstatus.inc");
?>
<html>
<head><title>LIST </title></head>
<body>
	<p>ITEMS TO DELETE </p>
	<?php
		$accountid=$_SESSION['accountid'];	
		$sql="select * from tblbiditems where accountid='$accountid'";
		$result=mysqli_query($conn,$sql) or die("error in selecting auction items: ".mysql_error());
		echo "<ul>";
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$biditemid=$row['biditemid'];
			$item = $row['biditem'];
			echo "<li><a href='deletebiditem.php?biditemid=$biditemid'>$item </a></li>";
		}
		echo "</ul>";
	?>
	<p><a href="menu.php"> MENU </a></p>
</body>

 </html>
