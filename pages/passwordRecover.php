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
                    Create New Password
                </div>
                <ul class="error-list" id="errorList">
                </ul>
                <form id="createNewPasswordForm">
                    <input type="hidden" class="" name="accid" id="accid" />
                    <div class="snap-form-container">
                        <div class="snap-form-row">
                            <div class="snap-col-12">
                                <label class="snap-label">New Password</label>
                                <input type="password" class="snap-form-element form-required-field focus-element" name="pwd" id="pwd" placeholder="Password" data-pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]).{8,}$" />
                                <ul class="password-status-container status-container">
                                    <li class="1-cap">Atleast 1 uppercase character</li>
                                    <li class="1-low">Atleast 1 lowercase character</li>
                                    <li class="1-num">Atleast 1 Number</li>
                                    <li class="1-@">Atleast 1 special character</li>
                                    <li class="min-8">Minimum 8 character</li>
                                </ul>
                            </div>
                            <div class="snap-col-12">
                                <label class="snap-label">Re-Type Password</label>
                                <input type="password" class="snap-form-element" name="rtpwd" id="rtpwd" placeholder="Re-type Password" />
                                <ul class="retype-password-status-container status-container">
                                    <li class="rtp-mat">Matched</li>
                                </ul>
                            </div>
                        </div>

                        <div class="snap-form-row">
                            <button class="snap-button snap-button-black snap-col-12 user-access-button" id="registerBtn">Create Password</button>
                        </div>
                    </div>
                </form>
                <div class="alternate-option-link">
                    <a href="./login.php">Back to Login</a>
                </div>
            </div>

            <div class="after-send-mail-container" id="linkExpiredShow" style="display:none">

            </div>
        </div>
    </main>
    <!-- <script src="../js/snap-popup.js"></script> -->
    <script src="../js/snap-form.js"></script>
    <script src="../js/password-recover.js"></script>
</body>

</html>