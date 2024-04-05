<?php
include('dbcon.php');
// Input validation
$id = htmlspecialchars($_GET['id']);
// Output encoding
$id = mysqli_real_escape_string($link, $id);
$query = "UPDATE book SET status = 'Archive' WHERE book_id='$id'";
mysqli_query($link, $query) or die(mysqli_error($link));
header('location:books.php');
?>
