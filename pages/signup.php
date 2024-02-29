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
    <?php
    include "./include/connection.php";
    ?>
    <main>
        <div class="access-form-main">
            <div class="access-form-container">
                <div class="logo">
                    <h1>Restaurant</h1>
                </div>
                <div class="form-head">
                    Registration
                </div>
                <div class="alternate-option-link">
                    Already have an account? <a href="./login.php">Login</a>
                </div>
                <ul class="error-list" id="errorList">
                </ul>
                <form id="signUpForm">
                    <div class="snap-form-container">
                        <div class="snap-form-row">
                            <div class="snap-col-12">
                                <label class="snap-label">First Name</label>
                                <input type="text" class="snap-form-element form-required-field focus-element" name="fname" id="fname" placeholder="First Name" />
                            </div>
                            <div class="snap-col-12">
                                <label class="snap-label">Last Name</label>
                                <input type="text" class="snap-form-element form-required-field" name="lname" id="lname" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="snap-form-row">
                            <div class="snap-col-12">
                                <label class="snap-label">Email</label>
                                <input type="email" class="snap-form-element form-required-field" name="email" id="email" placeholder="Email" data-pattern="[^@\s]+@[^@\s]+\.[^@\s]" />
                            </div>
                        </div>
                        <div class="snap-form-row">
                            <div class="snap-col-12">
                                <label class="snap-label">Password</label>
                                <input type="password" class="snap-form-element form-required-field" name="pwd" id="pwd" placeholder="Password" data-pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]).{8,}$" />
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
                            <div class="snap-col-12 tandc-conatiner">
                                <div>
                                    <input type="checkbox" class="snap-form-element" name="tccb" id="tccb" />
                                </div>
                                <p class="">By checking this checkbox you agree with our <span onclick="termAndCondShow()">Terms and Conditions</span>.</p>
                            </div>
                        </div>
                        <div class="snap-form-row">
                            <button class="snap-button snap-button-black snap-col-12 user-access-button" id="registerBtn">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/snap-popup.js"></script>
    <script src="../js/snap-form.js"></script>
    <script src="../js/sign-up.js"></script>
</body>

</html>