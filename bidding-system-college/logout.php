<?php
	session_start();
	session_destroy();
	header('Location:login.php?m=you have logged out');
?>
