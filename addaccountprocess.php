<?php
require_once("dbconnect.inc");
if(isset($_POST['username']))
{$username=$_POST['username'];}
if(isset($_POST['password']))
{$password=$_POST['password'];}
if(empty($username) || empty($password))
{	
	echo "invalid username or password";
	echo '<a href="addaccount.html">ADD ACCOUNT </a>';
	exit();

}

$sql = "insert into tblaccount (username,password) values ('$username','$password')";
$result = mysqli_query($conn,$sql) or die("error in adding account: " .mysqli.error());

$mess = "<p> account for $username succesfully created</p>";
?>
<html>
	<head><title> account adding </title></head>
	<body>
	<?php echo "$mess"; ?>
	<p> <a href="addaccount.html"> CREATE ANOTHER ACCOUNT</a> </p>
	<p> <a href="index.html"> HOME </a>
	 </body>
</html>
