<?php
	require_once("dbconnect.inc");
	$biditemno = isset($_GET['itemid'])? $_GET['itemid'] : "";
	$sql = "select tblbidhistory.bidhistoryid , tblbidhistory.bidprice , tblbidhistory.dtesubmitted , tblbiditems.biditem,tblbiditems.
		biddesc,tblbidhistory.accountid from tblbidhistory join tblbiditems using (biditemid) where biditemid='$biditemno'";
	
$result = mysqli_query($conn,$sql) or die("error in displaying bids".mysqli_error());
echo "items that are bided ";
echo "<ul>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$historyid = $row['bidhistoryid'];
	$item = $row['biditem'];
	$desc = $row['biddesc'];
	$price = $row['bidprice'];
	$dtesubmitted = $row['dtesubmitted'];
	$accountid =$row['accountid'];
	$sql1 = "select username from tblaccount where accountid='$accountid'";
	$result1 = mysqli_query($conn,$sql1) or die("error in fetching username".mysql_error());
	while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
	{	
		$uname = $row1['username'];
	}
	echo "bidded by  $uname -- bidded at INR $price and date submit is $dtesubmitted</p>";
}
	echo "</ul>";
	echo "<a href=login.php>LOGIN </a>";
?>
