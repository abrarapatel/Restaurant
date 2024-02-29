<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>

    <?php
    include "./include/commonHeadLink.php";
    ?>

    <link rel="stylesheet" href="../css/user-access-page.css">
</head>

<body>
    <main>
        <div class="access-form-main">
            <div class="access-form-container" id="accessFormContainer">
                <div class=" logo">
                    <h1>Restaurant</h1>
                </div>
                <div class="form-head">
                    Forgot Password
                </div>
                <ul class="error-list" id="errorList">
                </ul>
                <form id="forgotPwdForm">
                    <div class="snap-form-container">
                        <div class="snap-form-row">
                            <div class="snap-col-12">
                                <label class="snap-label">Email</label>
                                <input type="email" class="snap-form-element form-required-field focus-element" name="email" id="email" placeholder="Email" data-pattern="[^@\s]+@[^@\s]+\.[^@\s]" />
                            </div>
                        </div>
                        <div class="snap-form-row">
                            <button class="snap-button snap-button-black snap-col-12 user-access-button" id="forgotPwdBtn">Send Mail</button>
                        </div>
                    </div>
                </form>
                <div class="alternate-option-link">
                    <a href="./login.php">Back to Login</a>
                </div>
            </div>

            <div class="after-send-mail-container" id="afterSendMailContainer" style="display:none">
                <h3>Mail Sent Successfully</h3>
                <div>Check you mail inbox to get link for password recovery. Link will be expired in 2 hours.</div>
                <div class="alternate-option-link">If you didn't get mail <a href="./forgetPassword.php">Try Again</a>.</div>
            </div>

            <div class="after-send-mail-container" id="afterSendMailWaitContainer" style="display:none">
                <h3>Please Wait</h3>
            </div>
        </div>
    </main>
    <!-- <script src="../js/snap-popup.js"></script> -->
    <script src="../js/snap-form.js"></script>
    <script src="../js/forget-password.js"></script>
</body>

</html>