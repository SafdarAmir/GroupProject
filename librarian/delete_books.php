<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($link,"update book set status = 'Archive' where book_id='$id'")or die(mysqli_error($link));
header('location:books.php');
?>