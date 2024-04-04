<?php
$user = 'root';
$pass = 'mysql';
$host = 'localhost';   
$database = 'eb_lms';
//mysql_select_db('eb_lms',mysql_connect('localhost','root',''))or die(mysql_error());
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
?>