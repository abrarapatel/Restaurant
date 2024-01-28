<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/snap-popup.css">
    <link rel="stylesheet" href="../css/snap-form.css">

    <link rel="stylesheet" href="../Font Awesome/all.min.css">
    <link rel="stylesheet" href="../Font Awesome/fontawesome.min.css">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Restaurant</h1>
            </div>
            <div class="links-container">
                <a href="#" class="link active">Explore</a>
                <a href="#" class="link">My Restaurant</a>
                <a href="#" class="link">Account</a>
            </div>
        </nav>

        <div class="landing-container">
            <div class="landing-quote">Elevate Your Taste</div>
            <div class="search-conatiner">
                <input type="text" class="landing-searchbox"
                    placeholder="Search for restaurant where you would like to go" id="landingSearchbox">
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

    <footer>
        <div class="contact-form">
            <div class="snap-form-container">
                <div class="snap-form-row" style="margin: 0;">
                    <input type="text" class="snap-form-element snap-col-5" name="" id=""
                        placeholder="Enter Name Here" />
                    <button class="snap-button snap-button-orange snap-col-2">Submit</button>
                </div>
            </div>
        </div>
        <div class="contact-details">
            <h3>Get in Touch</h3>
            <div class="contact-icon-container">
                <div class="contact-icon">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/snap-popup.js"></script>
    <script src="../js/snap-form.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>