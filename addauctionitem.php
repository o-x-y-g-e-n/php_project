<?php
session_start();
require_once("checkstatus.inc");
?>
<html>
	<head><title>ADD ITEM </title></head>
	<body>
	<form id="form1" name="form1" method="post" action="addauctionprocess.php">
	<table border="0" cellspacing="2" cellpadding="2">
	<tr>
	<td>ITEM </td>
	<td> <input type="text" name="item" id="item" /> </td>
	</tr>
	<tr>
	<td valign="top"> DESCRIPTION </td>
	<td> <textarea name="description" id="description" cols="45" rows="5"></textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="button" id="button" value="Submit"/></td>
	</tr>
	</table>
	</body>
</html>
