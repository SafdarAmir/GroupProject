<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];
$status="active";
$email=$_POST['email'];
$username_mem=$_POST['username'];
$password_mem=$_POST['password'];

								
mysqli_query($link,"insert into member(firstname,lastname,gender,address,contact,type,year_level,status,email,username_mem,pass_mem) values('$firstname','$lastname','$gender','$address','$contact','$type','$year_level','$status','$email','$username_mem','$password_mem')")or die(mysqli_error($link));
 
 
header('location:member.php');
}
?>	