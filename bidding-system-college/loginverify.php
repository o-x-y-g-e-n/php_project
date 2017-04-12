<?php
session_start();
require_once("dbconnect.inc");

$_SESSION['loginstatus']="";
$username=isset($_POST['username']) ? $_POST['username'] : "";
$password=isset($_POST['password']) ? $_POST['password'] : "";
$sql = "select * from tblaccount where username='$username' and password='$password'";
$result =mysqli_query($conn,$sql) or die("cannot verify login".mysqli_error());

$num = mysqli_num_rows($result);
if($num != 1)
{
	header('location: login.php?m=Invalid login-please try again');
	exit;
}
$_SESSION['loginstatus']="true";
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$_SESSION['accountid'] = $row['accountid'];
header("Location: menu.php");
exit;
?>
