<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>

    <?php
    include "./include/commonHeadLink.php";
    ?>
</head>

<body>
    <header>
        <?php
        include "./include/navbar.php";
        ?>

        <div class="landing-container">
            <div class="landing-quote-container">
                <div class="landing-quote">
                    Elevate Your Taste
                </div>
            </div>
            <div class="search-conatiner">
                <input type="text" class="landing-searchbox" placeholder="Search for restaurant where you would like to go" id="landingSearchbox">
                <!-- <button class=" landing-search-button">Find</button> -->
            </div>
            <div class="searches-click-back" id="landingSearchBack"></div>
            <div class="searches-container" id="searchesContainer">
                <div class="searches-wrapper" id="searchesWrapper">
                </div>
            </div>
            <!-- <div class="landing-image-margin"></div> -->
            <div class=" landing-images">
                <img src="../Assets/Images/food dish.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <div class="services-container">
            <div class="services-container-head underline-orange">Services</div>
            <div class="services-wrapper">
                <div class="service">
                    <div class="service-icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="service-label">Explore</div>
                    <div class="service-details">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis obcaecati eos in doloribus?
                    </div>
                </div>

                <div class="service">
                    <div class="service-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="service-label">Menus</div>
                    <div class="service-details">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aut sequi necessitatibus.
                    </div>
                </div>

                <div class="service">
                    <div class="service-icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="service-label">Reservation</div>
                    <div class="service-details">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, minima.
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include("include/footer.php")
    ?>

    <script src="../js/snap-popup.js"></script>
    <script src="../js/snap-form.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>