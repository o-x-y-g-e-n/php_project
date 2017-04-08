<html>
<head>
<meta http-equiv="refresh" content="2" >
</head>
<body>
<?php
	require_once("dbconnect.inc");
	$biditemno = isset($_GET['itemid'])? $_GET['itemid'] : "";
	$sql = "select tblbidhistory.bidhistoryid , tblbidhistory.bidprice , tblbidhistory.dtesubmitted , tblbiditems.biditem,tblbiditems.
		biddesc,tblbidhistory.accountid from tblbidhistory join tblbiditems using (biditemid) where biditemid='$biditemno'";
	
$result = mysqli_query($conn,$sql) or die("error in displaying bids".mysqli_error());
echo "<h2>>Bidded</h2>";
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
	$result1 = mysqli_query($conn,$sql1) or die("error in fetching username".mysqli_error());
	while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
	{	
		$uname = $row1['username'];
	}
	echo "bidded by  $uname -- bidded at INR $price and date submit is $dtesubmitted</p>";
}
	$exp_date = "";
	$sql2 = "select expDate from tblbiditems where biditemid='$biditemno'";
	$result2 = mysqli_query($conn,$sql2) or die("error in fetching exp date".mysqli_error());
	while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
	{
		$exp_date = $row2['expDate'];
	}
	date_default_timezone_set('Asia/Kolkata');
	$now = new DateTime(date("Y-m-d H:i:s"));
	$date_exp = new DateTime(date($exp_date));
	$diff = $date_exp->diff($now);
	echo "<h1>time left for expiration is</h1> ";
	echo'<h1>'.$diff->format('%d days %h hours %m minutes %s seconds').'</h1>';
	echo "</ul>";
	echo "<a href=login.php>LOGIN </a>";
?>
</body>
</html>
