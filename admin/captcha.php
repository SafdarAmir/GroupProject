<?php
session_start();
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
                        <p><strong>Please enter the verification based on the question:</strong></p>
                    </div>
                    <form class="form-horizontal" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputCaptcha">MFA</label>
                            <div class="controls">
                                <input type="text" name="captcha" id="captcha" placeholder="<?php echo $_SESSION['captcha_question']; ?>" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button id="verify" name="verify" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
