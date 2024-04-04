<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];
$status=$_POST['status'];
$email=$_POST['email'];
$user_mem=$_POST['username'];
$pass_mem=$_POST['password'];

mysqli_query($link,"update member set firstname='$firstname',lastname='$lastname',gender='$gender',address = '$address',contact = '$contact',type = '$type',year_level = '$year_level',status = '$status',email = '$email',username_mem = '$user_mem',pass_mem='$pass_mem' where member_id='$id'")or die(mysqli_error($link));
								
								
header('location:member.php');
}
?>	