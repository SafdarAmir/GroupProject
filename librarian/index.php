<?php 
include('header.php'); 
include('navbar.php'); 

// Initialize session
session_start();

date_default_timezone_set('Asia/Kuala_Lumpur');

// Function to log details
function logDetails($message) {
    $logFile = 'login_log.txt';
    $currentDateTime = date('Y-m-d H:i:s');
    $logMessage = $currentDateTime . ': ' . $message . PHP_EOL;
    file_put_contents($logFile, htmlspecialchars($logMessage), FILE_APPEND);  // Output encoding
}

// Function to generate CAPTCHA
function generateCaptcha() {
    $randomNumber1 = rand(1, 10);
    $randomNumber2 = rand(1, 10);
    $_SESSION['captcha_result'] = $randomNumber1 + $randomNumber2;
    return "$randomNumber1 + $randomNumber2 = ?";
}

if (isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);  // Input validation and output encoding
    $password = htmlspecialchars($_POST['password']);  // Input validation and output encoding

    // Fetch hashed password from database
    $query = "SELECT * FROM users WHERE username='$username' AND user_type='librarian'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if ($num_row > 0 && password_verify($password, $row['password'])) {
        logDetails("Successful login for username: $username");
        $_SESSION['id'] = $row['user_id'];

        // Generate and display CAPTCHA
        $_SESSION['captcha_question'] = generateCaptcha();

        include('captcha.php'); // Include the CAPTCHA display file
        exit;
    } else {
        logDetails("Failed login attempt for username: $username");
        $error = true;
    }
}

if (isset($_POST['verify'])) {
    $captcha = htmlspecialchars($_POST['captcha']);  // Input validation and output encoding
    $result = $_SESSION['captcha_result'];
    if ($captcha == $result) {
        header('location:dashboard.php');
        exit;
    } else {
        logDetails("Incorrect CAPTCHA answer");
        header('location:error.php');  // Redirect to error page
        exit;
    }
}
?>

<div class="container">
    <div class="margin-top">
        <div class="row">    
            <div class="span12">
                <div class="sti">
                    <img src="../LMS/librarylogo1.jpg" class="img-rounded">
                </div>
                <div class="login">
                    <div class="log_txt">
                        <p><strong>Please Enter the Details Below..</strong></p>
                    </div>
                    <form class="form-horizontal" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Username</label>
                            <div class="controls">
                                <input type="text" name="username" id="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Password</label>
                            <div class="controls">
                                <input type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                            </div>
                        </div>
                        <?php
                        if (isset($error)) {
                        ?>
                            <div class="alert alert-danger">Access Denied</div>
                        <?php
                        }

                        if (isset($captchaError)) {
                        ?>
                            <div class="alert alert-danger">Incorrect CAPTCHA answer</div>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>      
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
