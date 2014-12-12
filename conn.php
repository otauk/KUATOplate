<?php
	$con = mysqli_connect('localhost','username','passwort','dbname');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
// utf-8 erzwingen wegen umlauten
$utf = "SET NAMES 'utf8'";
$utf_query=$con->query($utf);
?>