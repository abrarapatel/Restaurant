<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>

    <link rel="stylesheet" href="../css/style.css">
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
        <div class="services-container-head underline-orange menu-head">Menu</div>

        <div class="menu-container">
            <div class="menu-filter-container">
                <div class="menu-section-header">Filter</div>
            </div>
            <div class="menu-content-container">
                <div class="menu-content-category-container">
                    <div class="menu-content-category-header">
                        Lunch
                    </div>
                    <div class="menu-content-items-container">
                        <div class="menu-content-item-wrapper">
                            <div class="menu-item-details">
                                <div class="menu-item-img">
                                    <img src="../Assets/Images/Food Images/pixzolo-photography-8YBHgP0WrEo-unsplash.jpg">
                                </div>
                            </div>
                            <div class="menu-item-price-details"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" menu-category-container">
                <div class="menu-section-header">Category</div>
                <div class="menu-category-content-conatiner">
                    <div class="menu-category">
                        <div class="menu-category-text selected">All</div>
                    </div>
                    <div class="menu-category">
                        <div class="menu-category-text">
                            Lunch
                            <div class="menu-category-image">
                                <img src="../Assets/Images/Food Images/ankit-sinha-lB7LEdjU6B0-unsplash.jpg" alt="">
                            </div>
                        </div>
                        <div class="menu-category-child">
                            <div class="menu-category">
                                <div class="menu-category-text">
                                    Appetizers
                                    <div class="menu-category-image">
                                        <img src="../Assets/Images/Food Images/kashish-lamba-2y_-w7KKuYI-unsplash.jpg" alt="">
                                    </div>
                                </div>
                                <div class="menu-category-child">
                                    <div class="menu-category">
                                        <div class="menu-category-text">Garlic Parmesan Fries</div>
                                        <div class="menu-category-text">Spinach and Artichoke Dip</div>
                                        <div class="menu-category-text">Caprese Salad</div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-category">
                                <div class="menu-category-text">Main Courses</div>
                                <div class="menu-category-child">
                                    <div class="menu-category">
                                        <div class="menu-category-text">Grilled Salmon</div>
                                        <div class="menu-category-text">Pasta Alfredo</div>
                                        <div class="menu-category-text">Chicken Parmesan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-category">
                                <div class="menu-category-text">Desserts</div>
                                <div class="menu-category-child">
                                    <div class="menu-category">
                                        <div class="menu-category-text">Chocolate Lava Cake</div>
                                        <div class="menu-category-text">Tiramisu</div>
                                        <div class="menu-category-text">Cheesecake</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-category">
                        <div class="menu-category-text">Dinner</div>
                        <div class="menu-category-child">
                            <div class="menu-category">
                                <div class="menu-category-text">Steakhouse Specials</div>
                                <div class="menu-category-text">Seafood Delights</div>
                                <div class="menu-category-text">Vegetarian Options</div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-category">
                        <div class="menu-category-text">Breakfast</div>
                        <div class="menu-category-child">
                            <div class="menu-category">
                                <div class="menu-category-text">Classic Breakfast</div>
                                <div class="menu-category-text">Healthy Start</div>
                                <div class="menu-category-text">Omelette Varieties</div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-category">
                        <div class="menu-category-text">Dinners</div>
                        <div class="menu-category-child">
                            <div class="menu-category">
                                <div class="menu-category-text">Chef's Specials</div>
                                <div class="menu-category-text">International Flavors</div>
                                <div class="menu-category-text">Family Platters</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
    <?php
    include("include/footer.php")
    ?>

</body>

</html>