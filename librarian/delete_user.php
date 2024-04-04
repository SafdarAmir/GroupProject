<?php
include('dbcon.php');

$id = $_POST['id'];

// Get the user_type of the user to be deleted
$query = "SELECT user_type FROM users WHERE user_id='$id'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$user_type = $row['user_type'];

// Check if the user_type is not 'admin' before deleting
if ($user_type != 'admin') {
    mysqli_query($link, "DELETE FROM users WHERE user_id='$id'") or die(mysqli_error($link));
} else {
    header('location:error_input.php');
    exit;
}
?>
