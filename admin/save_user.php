<?php
include('session.php');
include('dbconfig.php');

if (isset($_POST['save_user'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $user_type = $_POST['user_type'];

    $query = "INSERT INTO users (username, password, firstname, lastname, user_type) VALUES ('$username', '$password', '$firstname', '$lastname', '$user_type')";
    mysqli_query($link, $query) or die(mysqli_error($link));

    header('location:users.php'); // Redirect to the users page
}
?>
