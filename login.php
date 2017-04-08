<?php
$mess = "please enter your login info ";
if(isset($_GET['m']))
{
	$mess = $_GET['m'];
}
?>
<html>
<head> <title> LOGIN </title></head>
<body>
	<form id="form1" name="form1" method="post" action="loginverify.php">
	<p> <?php echo "$mess"; ?>
	<br />
	Username 
	<input type="text" name="username" id="username"/>
	<br />
	Password
	<input type="password" name="password" id="password" />
	<br />
	<input type="submit" name="button" id="button" value="submit" />
	</p>
	<p> <a href="index.html">HOME </a> </p>
	</form>
</body>
</html>	
