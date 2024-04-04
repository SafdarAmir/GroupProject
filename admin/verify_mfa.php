<?php 
include('header.php'); 
include('navbar.php'); 

if (isset($_POST['verify'])) {
    session_start();
    $enteredCode = $_POST['code'];

    $query = "SELECT * FROM users WHERE user_id=" . $_SESSION['id'];
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $row = mysqli_fetch_array($result);

    if ($enteredCode == $row['mfa_code']) {
        logDetails("Successful MFA verification for user ID: " . $_SESSION['id']);
        header('location:dashboard.php');  // Redirect to dashboard after successful MFA
        exit;
    } else {
        logDetails("Failed MFA verification for user ID: " . $_SESSION['id']);
        header('location:error.php');  // Redirect to custom error page
        exit;
    }
}
?>

<div class="libraryiner">
    <div class="margin-top">
        <div class="row">
            <div class="span12">
                <div class="sti">
                    <img src="../LMS/librarylogo1.jpg" class="img-rounded">
                </div>
                <div class="login">
                    <div class="log_txt">
                        <p><strong>Please Enter the MFA Code Sent to Your Email</strong></p>
                    </div>
                    <form class="form-horizontal" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputCode">MFA Code</label>
                            <div class="controls">
                                <input type="text" name="code" id="code" placeholder="MFA Code" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button id="verify" name="verify" type="submit" class="btn"><i class="icon-check icon-large"></i>&nbsp;Verify</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
