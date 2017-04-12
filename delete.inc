<?php 
	$sql2 = "DELETE FROM tblbiditems WHERE (tblbiditems.expDate < NOW())";
	$result2 = mysqli_query($conn,$sql2) or die("error in deleting bids".mysqli_error());
?>
