<?php
$user = 'root';
$pass = 'mysql';
$host = 'localhost';   
$database = 'eb_lms';

$link = mysqli_connect($host, $user, $pass) or die("Unable to connect");
mysqli_select_db($link, $database) or die("Unable to select database");
?>
