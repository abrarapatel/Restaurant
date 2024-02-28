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
            <div class="access-form-container">
                <div class="logo">
                    <h1>Restaurant</h1>
                </div>
                <div class="form-head">
                    Login
                </div>
                <div class="alternate-option-link">
                    Do not have an account? <a href="./signup.php">Sign Up</a>
                </div>
                <ul class="error-list" id="errorList">
                </ul>
                <form id="loginForm">
                    <div class="snap-form-container">
                        <div class="snap-form-row">
                            <div class="snap-col-12">
                                <label class="snap-label">Email</label>
                                <input type="email" class="snap-form-element form-required-field focus-element" name="email" id="email" placeholder="Email" data-pattern="[^@\s]+@[^@\s]+\.[^@\s]" />
                            </div>
                            <div class="snap-col-12">
                                <label class="snap-label">Password</label>
                                <input type="password" class="snap-form-element form-required-field" name="pwd" id="pwd" placeholder="Password" />
                            </div>
                        </div>
                        <div class="snap-form-row">
                            <button class="snap-button snap-button-black snap-col-12 user-access-button" id="registerBtn">Login</button>
                        </div>
                    </div>
                </form>
                <div id="user-access-google"></div>
            </div>
        </div>
    </main>
    <!-- <script src="../js/snap-popup.js"></script> -->
    <script src="../js/snap-form.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>