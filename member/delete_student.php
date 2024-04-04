<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($link,"delete from member where member_id='$id'") or die(mysqli_error($link));
header('location:member.php');
?>