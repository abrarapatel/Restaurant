<nav>
    <div class="links-container left">
        <a href="./home.php" class="link active">Explore</a>
    </div>
    <div class="logo">
        <h1>Restaurant</h1>
    </div>
    <div class="links-container">
        <?php
        session_start();

        if (isset($_SESSION['user_accid'])) {
        ?>
            <a href="./account.php" class="link"><i class="fa-solid fa-user"></i> <?= $_SESSION['user_fname'] ?>
                <?= $_SESSION['user_lname'] ?></a>
        <?php
        } else {
        ?>
            <a href="./login.php" class="link">Log In</a>
            <a href="./signup.php" class="link">Sign Up</a>
        <?php
        }
        ?>
    </div>
</nav>