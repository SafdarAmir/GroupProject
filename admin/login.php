<?php

use PragmaRX\Google2FA\Google2FA;

require 'vendor/autoload.php';

$google2fa = new Google2FA();




	if (isset($_POST['submit'])){
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM users WHERE username='$username' AND user_type = 'admin'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $row = mysqli_fetch_array($result);

    if ($row && password_verify($password, $row['password'])) {
        if ($row['mfa_enabled'] == 1) {
            $_SESSION['temp_user_id'] = $row['user_id']; // Store temporary user_id to verify MFA code later
            header('location:verify_mfa.php');
            exit();	}
	<?php
	}}
	?>