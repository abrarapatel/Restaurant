<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>

    <link rel="stylesheet" href="../css/show-menu.css">

    <?php
    include "./include/commonHeadLink.php";
    ?>

</head>

<body>

    <head>
        <?php
        include "./include/navbar.php";
        ?>
    </head>
    <main>

        <div class="menu-header-container">
            <a href="./showRestaurant.php?resturantCode=restaurant-1" class="go-back-button">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Go back to Restaurant</span>
            </a>
        </div>

    </main>
    <?php
    include("include/footer.php")
    ?>

</body>

</html>