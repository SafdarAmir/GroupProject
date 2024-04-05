<?php
include('session.php');
include('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING); // Don't hash yet
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $user_type = filter_var($_POST['user_type'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Additional server-side validation
    if (empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($user_type) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location:error.php');  // Redirect to custom error page
        exit;
    }

    // Hash the password after validation
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Using prepared statements to prevent SQL injection
    $stmt = $link->prepare("INSERT INTO users (username, password, firstname, lastname, email, user_type) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $password_hash, $firstname, $lastname, $email, $user_type);
    
    if ($stmt->execute()) {
        header('location:users.php'); // Redirect to the users page
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $link->close();
}
?>
