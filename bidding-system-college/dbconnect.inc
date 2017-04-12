<?php
$conn = mysqli_connect("localhost","root","username") or die("cannot connect to localhost");
mysqli_select_db($conn,'auction') or die("cannot connect to auction database");
?>
