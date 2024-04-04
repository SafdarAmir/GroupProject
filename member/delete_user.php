<?php
include('dbcon.php');

$id=$_GET['id'];

mysqli_query($link,"delete from users where user_id='$id'") or die(mysql_error($link));

header('location:users.php');
?>